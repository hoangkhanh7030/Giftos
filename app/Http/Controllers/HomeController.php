<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService) {
        $this->productService = $productService;
    }
    
    public function index()
    {
        $products = $this->productService->getAllProduct();
        $slider = 'landing.component.slider';
        return view('landing.home', compact('slider','products'));
    }
}
