<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Status;
use App\Services\Interfaces\ProductServiceInterface;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductServiceInterface $productService) {
        $this->productService = $productService;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->getAllProduct();
        return view('dashboard.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $statuses = Status::all();
    
        return view('dashboard.products.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        
        if ($request->hasFile('image')) {
            // Store the image in the public disk, in the 'products' folder
            $imagePath = $request->file('image')->store('images', 'public'); // 'public' refers to the 'public' disk
            $product = Product::create([
                'product_name' => $request->product_name,
                'price' => $request->price,
                'description' => $request->description,
                'category_id' => 1,
                'status_id' => 1,
                'image' => $imagePath,
            ]);
        }
        


        return redirect()->route('products.index')->with('success', 'Product created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
