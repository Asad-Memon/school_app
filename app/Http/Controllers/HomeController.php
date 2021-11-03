<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('dashbaord');
    }
    public function dashbaord2()
    {
        return view('dashbaord2');
    }
    public function dashbaord3()
    {
        return view('dashbaord3');
    }
}