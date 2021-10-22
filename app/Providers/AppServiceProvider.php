<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Composers\Blog\SidebarComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        View::composer('layouts.blog.sidebar', SidebarComposer::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
    }
}
