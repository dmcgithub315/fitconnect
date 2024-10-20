<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Auth;
use Illuminate\Http\Request;

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
            return redirect()->route('about');
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
