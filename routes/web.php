<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhyUsController;
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