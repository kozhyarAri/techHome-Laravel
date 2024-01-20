<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\EmailMessage;
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
        view()->composer('layouts.public',function($view){
            $categorys = Category::all();
            $view->with(['categorys'=>$categorys]);
        });

        view()->composer('layouts.admin',function($view){
            $message = EmailMessage::where('state',0)->count();
            $view->with(['message'=>$message]);
        });
    }
}
