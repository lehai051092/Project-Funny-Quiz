<?php

namespace App\Providers;

use App\Http\Repositories\CategoryRepositoryInterface;
use App\Http\Repositories\Eloquent\CategoryEloquentRepository;
use App\Http\Repositories\Eloquent\UserReponsitoryEloquent;
use App\Http\Repositories\UserReponsitoryInterface;
use App\Http\Services\CategoryServiceInterface;
use App\Http\Services\Impl\CategoryImplService;
use App\Http\Services\Impl\UserServiceImpl;
use App\Http\Services\UserServiceInterface;
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
        $this->app->singleton(UserReponsitoryInterface::class, UserReponsitoryEloquent::class);
        $this->app->singleton(UserServiceInterface::class, UserServiceImpl::class);
        $this->app->singleton(CategoryServiceInterface::class, CategoryImplService::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryEloquentRepository::class);
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
