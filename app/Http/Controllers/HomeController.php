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
    function trainerDetails(Request $request)
    {
        return view('pages.trainer_details');
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

    function login(Request $request) {

    }
}
