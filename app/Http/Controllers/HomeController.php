<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function course_plans()
    {
        return view('front.course_plans');
    }
    public function teachers()
    {
        return view('front.teachers');
    }
    public function course_program()
    {
        return view('front.course_program');
    }
}
