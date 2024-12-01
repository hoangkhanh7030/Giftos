<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public $serviceBindings = [
        'App\Services\Interfaces\ProductServiceInterface' => 'App\Services\ProductService',
        'App\Repositories\Interfaces\ProductRepositoryInterface' => 'App\Repositories\ProductRepository',
        'App\Services\Interfaces\CategoryServiceInterface' => 'App\Services\CategoryService',
        'App\Repositories\Interfaces\CategoryRepositoryInterface' => 'App\Repositories\CategoryRepository',
        'App\Services\Interfaces\StatusServiceInterface' => 'App\Services\StatusService',
        'App\Repositories\Interfaces\StatusRepositoryInterface' => 'App\Repositories\StatusRepository',
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->serviceBindings as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
