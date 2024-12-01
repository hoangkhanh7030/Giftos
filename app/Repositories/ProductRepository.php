<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

/**
 * Class ProductRepository
 * @package App\Repositories
 */
class ProductRepository implements ProductRepositoryInterface
{
    public function paginate()
    {
        $users = Product::with(['category','status'])->paginate(8);
        return $users;
    }
}
