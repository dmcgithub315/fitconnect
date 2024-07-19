<?php

use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/trainers', [HomeController::class, 'trainers'])->name('trainers');
Route::get('/trainer', [HomeController::class, 'trainerDetails'])->name('trainer_details');
Route::get('/classes', [HomeController::class, 'classes'])->name('classes');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/exercises', [HomeController::class, 'exercises'])->name('exercises');
Route::get('/exercise', [HomeController::class, 'exerciseDetails'])->name('exercise_details');
Route::get('/premium', [HomeController::class, 'premium'])->name('premium');
Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
Route::get('/quiz/1', [QuizController::class, 'page1'])->name('quiz_1');
Route::get('/quiz/2', [QuizController::class, 'page2'])->name('quiz_2');
Route::get('/quiz/3', [QuizController::class, 'page3'])->name('quiz_3');
Route::get('/quiz/4', [QuizController::class, 'page4'])->name('quiz_4');
Route::get('/quiz/5', [QuizController::class, 'page5'])->name('quiz_5');
