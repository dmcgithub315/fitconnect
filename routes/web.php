<?php

use App\Http\Controllers\HomeController;
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
Route::get('/exercises', [HomeController::class, 'exercises'])->name('exercises');
Route::get('/exercise', [HomeController::class, 'exerciseDetails'])->name('exercise_details');
