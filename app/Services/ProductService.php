<?php

namespace App\Services;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\Interfaces\StatusServiceInterface;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService implements ProductServiceInterface
{
    protected $productRepository;
    protected $categoryService;
    protected $statusService;

    public function __construct(ProductRepositoryInterface $productRepository, StatusServiceInterface $statusService, CategoryServiceInterface $categoryService)
    {
        $this->productRepository = $productRepository;
        $this->categoryService = $categoryService;
        $this->statusService = $statusService;
    }
    public function getAllProduct()
    {
        $products = $this->productRepository->paginate();
        return $products;
    }
}
