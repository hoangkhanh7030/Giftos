<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhyUsController extends Controller
{
    public function index() {
        return view('landing.why');
    }
}
