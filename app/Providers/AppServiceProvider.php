<?php

namespace App\Providers;

use App\Repositories\Product\ProductRepositoryInterface;
use  App\Repositories\Product\ProductRepository;
use  App\Service\Product\ProductServiceInterface;
use  App\Service\Product\ProductService;
use App\Repositories\Category\CategoryRepositoryInterface;
use  App\Repositories\Category\CategoryRepository;
use  App\Service\Category\CategoryServiceInterface;
use  App\Service\Category\CategoryService;
use App\Repositories\Brand\BrandRepositoryInterface;
use  App\Repositories\Brand\BrandRepository;
use  App\Service\Brand\BrandServiceInterface;
use  App\Service\Brand\BrandService;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );

        $this->app->singleton(
            ProductServiceInterface::class,
            ProductService::class
        );
         //Brand
         $this->app->singleton(
            BrandRepositoryInterface::class,
            BrandRepository::class
        );

        $this->app->singleton(
            BrandServiceInterface::class,
            BrandService::class
        );

        //Category
        $this->app->singleton(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );

        $this->app->singleton(
            CategoryServiceInterface::class,
            CategoryService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
