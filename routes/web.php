<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Frontend\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhyUsController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    HomeController::class,
    'index',
])->name('landing.home');

Route::get('/shop', [
    ShopController::class,
    'index',
])->name('landing.shop');

Route::get('/why-us', [
    WhyUsController::class,
    'index',
])->name('landing.why');

Route::get('/testimonial', [
    TestimonialController::class,
    'index',
])->name('landing.testimonial');

Route::get('/contact-us', [
    ContactUsController::class,
    'index',
])->name('landing.contact');

Route::get('/login', [
    LoginController::class,
    'index',
])->name('login')->middleware(LoginMiddleware::class);

// Auth login

Route::post('/auth', [
    AuthController::class,
    'login',
])->name('auth.login');

// Dashboard

Route::get('/dashboard', [
    DashboardController::class,
    'index',
])->name('dashboard')->middleware(AuthMiddleware::class);

Route::get('/logout', [
    AuthController::class,
    'logout',
])->name('auth.logout');

