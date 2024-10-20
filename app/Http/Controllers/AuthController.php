<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json(['success' => true, 'message' => 'Login successful']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid credentials'], 401);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()], 400);
        }

        $user = User::create([
            'name' => $request->input('fullName'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        Auth::login($user);

        return response()->json(['success' => true, 'message' => 'Registration successful']);
    }
    public function logout(Request $request)
    {
        Auth::logout();  // Đăng xuất người dùng

        $request->session()->invalidate();  // Xóa session hiện tại

        $request->session()->regenerateToken();  // Tạo token mới để tránh CSRF

        return redirect('/');  // Chuyển hướng về trang chủ
    }

}

?>
