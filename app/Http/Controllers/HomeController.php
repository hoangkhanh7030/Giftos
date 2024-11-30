<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = 'landing.component.slider';
        return view('landing.home', compact('slider'));
    }
}
