<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('/save-profile', [ProfileController::class, 'saveProfile'])->name('save.profile');

Route::get('/trainer', [HomeController::class, 'trainerDetails'])->name('trainer_details');
Route::get('/meals', [HomeController::class, 'meals'])->name('meals');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/payment/{package}', [HomeController::class, 'payment'])->name('payment');
Route::get('/check-payment/{transactionCode}', [HomeController::class, 'checkPayment']);
Route::get('/bmi', [HomeController::class, 'exercises'])->name('exercises');
Route::get('/exercise', [HomeController::class, 'exerciseDetails'])->name('exercise_details');
Route::get('/premium', [HomeController::class, 'premium'])->name('premium');
Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
