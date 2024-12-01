<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@123456'),
        ]);

        Category::factory()->create([
            'name' => 'Ring',
        ]);

        Category::factory()->create([
            'name' => 'Toy',
        ]);

        Category::factory()->create([
            'name' => 'Flower',
        ]);

        Status::factory()->create([
            'name' => 'Active',
        ]);

        Status::factory()->create([
            'name' => 'Inactive',
        ]);

        $products = [
            [
                'name' => 'Ring',
                'price' => 200,
                'image' => 'images/p1.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 1,
                'status_id' => 1,
            ],
            [
                'name' => 'Watch',
                'price' => 300,
                'image' => 'images/p2.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 1,
                'status_id' => 1,
            ],
            [
                'name' => 'Teddy Bear',
                'price' => 110,
                'image' => 'images/p3.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 2,
                'status_id' => 1,
            ],
            [
                'name' => 'Flower Bouquet',
                'price' => 45,
                'image' => 'images/p4.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 3,
                'status_id' => 1,
            ],
            [
                'name' => 'Teddy Bear',
                'price' => 95,
                'image' => 'images/p5.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 2,
                'status_id' => 1,
            ],
            [
                'name' => 'Flower Bouquet',
                'price' => 70,
                'image' => 'images/p6.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 3,
                'status_id' => 1,
            ],
            [
                'name' => 'Watch',
                'price' => 400,
                'image' => 'images/p7.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 2,
                'status_id' => 1,
            ],
            [
                'name' => 'Ring',
                'price' => 450,
                'image' => 'images/p8.png',
                'description' => 'Some seeding operations may cause you to alter or lose data. In order to protect you from running seeding commands against your production database',
                'category_id' => 1,
                'status_id' => 1,
            ],

        ];

        foreach ($products as $product) {
            Product::factory()->create([
                'product_name'=> $product['name'],
                'price'=> $product['price'],
                'image'=> $product['image'],
                'description'=> $product['description'],
                'category_id'=> $product['category_id'],
                'status_id'=> $product['status_id'],
            ]);
        }

    }
}
