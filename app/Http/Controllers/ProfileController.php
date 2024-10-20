<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function saveProfile(Request $request)
    {
        // Lấy thông tin người dùng hiện tại
        $user = Auth::user();

        // Tính BMR dựa trên giới tính
        if ($request->gender == 'male') {
            $bmr = 88.362 + (13.397 * $request->weight) + (4.799 * $request->height) - (5.677 * $request->age);
        } else {
            $bmr = 447.593 + (9.247 * $request->weight) + (3.098 * $request->height) - (4.330 * $request->age);
        }

        // Tính TDEE dựa trên hệ số hoạt động
        $tdee = $bmr * $request->activity;

        // Tính daily_calories
        if ($request->goal == 'lose') {
            // Nếu mục tiêu là giảm cân, giảm lượng calories
            $daily_calories = $tdee - (7700 * $request->rate) / 7; // Mỗi kg mỡ chứa khoảng 7700 calories
        } elseif ($request->goal == 'gain') {
            // Nếu mục tiêu là tăng cân, tăng lượng calories
            $daily_calories = $tdee + (7700 * $request->rate) / 7;
        } else {
            // Nếu mục tiêu là duy trì, lượng calories bằng với TDEE
            $daily_calories = $tdee;
        }

        // Cập nhật thông tin vào bảng users
        $user->goal = $request->goal;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->height = $request->height;
        $user->weight = $request->weight;
        $user->target = $request->target_weight;
        $user->activity = $request->activity;
        $user->rate = $request->rate;
        $user->daily_calories = $daily_calories; // Lưu lượng calories hàng ngày

        // Lưu thông tin
        $user->save();

        return response()->json(['success' => 'Data saved successfully!', 'daily_calories' => $daily_calories]);
    }
    function profile(Request $request)
    {
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }
}

?>
