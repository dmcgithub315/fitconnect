<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(Request $request)
    {
        return view('home.home');
    }
    function trainers(Request $request)
    {
        return view('pages.trainers');
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
    function classes(Request $request)
    {
        return view('pages.classes');
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
        return view('pages.exercises');
    }

    function login(Request $request) {

    }
}
