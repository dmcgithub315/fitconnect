<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\UserPayments;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    function home(Request $request)
    {
        return view('home.home');
    }
    function contact(Request $request)
    {
        return view('pages.contact');
    }
    function about(Request $request)
    {
        return view('pages.about');
    }
    function pricing(Request $request)
    {
        return view('pages.pricing');
    }
    public function payment($package)
    {
        // Gói thanh toán tương ứng với package
        $amount = 0;
        switch ($package) {
            case '1-month':
                $amount = 30000;
                break;
            case '6-month':
                $amount = 150000;
                break;
            case '1-year':
                $amount = 250000;
                break;
            default:
                abort(404, "Invalid package");
        }

        // Tạo mã giao dịch duy nhất cho user và lưu vào session
        $transactionCode = 'TX' . uniqid() . '' . time();
        session(['transactionCode' => $transactionCode]);

        // Tạo URL QR code với thông tin giao dịch
        $qrCodeUrl = "https://img.vietqr.io/image/mbbank-0981567024-compact2.jpg?amount={$amount}&addInfo=start{$transactionCode}end&accountName=Fitconnect";

        // Trả về view với dữ liệu
        return view('pages.payment', compact('amount', 'qrCodeUrl', 'transactionCode'));
    }

    public function checkPayment($transactionCode)
    {
        $sheetId = '12zsnPaGRB_ekI4pSFig6suN9TzGKGvGPNUuK2uuukr8';
        $apiKey = 'AIzaSyBk3YskomIRdmg5Q-VjPUZa5p5I55VJ5_A';
        $range = 'MBBank!A2:F100'; // Tên sheet và phạm vi

        // Gọi đến Google Sheets API
        $url = "https://sheets.googleapis.com/v4/spreadsheets/$sheetId/values/$range?key=$apiKey";

        $response = Http::get($url);

        if ($response->successful()) {
            $message = false;
            $code = "";
            $amount = 0;
            foreach ($response->json()['values'] as $value) {
                if (preg_match('/start(.*?)end/', $value[1], $matches)) {
                    if($transactionCode == trim($matches[1])) {
                        $message = true;
                        $amount = $value[2]*1000;
                    }
                }
            }
            if ($message) {
                $months = 1;
                switch ($amount) {
                    case 150000:
                        $months = 6;
                        break;
                    case 250000:
                        $months = 12;
                        break;
                    default:
                        $months = 1;
                        break;
                }
                $payment = new UserPayments();
                $payment->user_id = \Illuminate\Support\Facades\Auth::id();
                $payment->amount = $amount;
                $payment->date = Carbon::now();
                $payment->save();
                $user = \Illuminate\Support\Facades\Auth::user();
                $user->premium = 1;
                $user->premium_date = Carbon::now()->addMonths($months);
                $user->save();
                return response()->json(['message' => "OK"], 200);
            } else {
                return response()->json(['error' => 'Ko co GD'], 500);
            }

        }

        return response()->json(['error' => 'Unable to fetch data from Google Sheets'], 500);
    }
    function trainerDetails(Request $request)
    {
        return view('pages.trainer_details');
    }
    function exerciseDetails(Request $request)
    {
        return view('pages.exercise_details');
    }

    function register(Request $request) {
        $fullName = $request->input('fullName');
        $email = $request->input('email');
        $role = $request->input('role');
        $password = $request->input('password');

    }
    public function meals(Request $request)
    {
        $user = Auth::user();
        if(!$user || !$user->premium) {
            return redirect()->route('pricing');
        }
        $dailyCalories = $user->daily_calories;

        // Tính toán calories cho từng bữa ăn
        $breakfastCalories = $dailyCalories * 0.3; // 30%
        $lunchCalories = $dailyCalories * 0.4; // 40%
        $dinnerCalories = $dailyCalories * 0.3; // 30%

        // Lấy dữ liệu bữa ăn từ bảng meals
        $meals = Meal::all();

        // Lọc theo meal_type trước khi tìm bữa ăn gần nhất
        $breakfastMeals = $meals->where('meal_type', 'breakfast');
        $lunchMeals = $meals->where('meal_type', 'lunch');
        $dinnerMeals = $meals->where('meal_type', 'dinner');

        // Tìm bữa ăn gần nhất với calories đã tính toán
        $breakfast = $this->findClosestMeal($breakfastMeals, $breakfastCalories);
        $lunch = $this->findClosestMeal($lunchMeals, $lunchCalories);
        $dinner = $this->findClosestMeal($dinnerMeals, $dinnerCalories);

        $plans = [$breakfast, $lunch, $dinner];

        // Trả về view với thông tin bữa ăn
        return view('pages.calories', compact('user', 'breakfast', 'lunch', 'dinner', 'plans', 'dailyCalories'));
    }

    private function findClosestMeal($meals, $targetCalories)
    {
        // Tìm bữa ăn gần nhất
        $closestMeal = $meals->sortBy(function ($meal) use ($targetCalories) {
            return abs($meal->calories - $targetCalories);
        })->first(); // Lấy bữa ăn gần nhất

        return $closestMeal;
    }


    function premium(Request $request)
    {
        return view('pages.premium');
    }
    function schedule(Request $request)
    {
        return view('pages.schedule');
    }
    function exercises(Request $request)
    {
        $user = Auth::user();
        return view('pages.bmi', compact('user'));
    }

    function login(Request $request) {

    }
}
