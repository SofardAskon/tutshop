<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->categoryLoad();
    }

    public function categoryLoad()
    {
        View::composer('layout', function ($view) {
            $view->with('categories', \App\Models\Category::with('children')->where('parent_id', 0)->get());
        });
    }
}
