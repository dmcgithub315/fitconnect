<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    function page1(Request $request)
    {
        return view('quizzes.1');
    }
    function page2(Request $request)
    {
        return view('quizzes.2');
    }
    function page3(Request $request)
    {
        return view('quizzes.3');
    }
    function page4(Request $request)
    {
        return view('quizzes.4');
    }
    function page5(Request $request)
    {
        return view('quizzes.5');
    }
}
