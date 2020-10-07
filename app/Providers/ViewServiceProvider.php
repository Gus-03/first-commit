<?php

namespace App\Providers;
use App\Models\subscription;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*', function($view){
            $subscription = request()->subscription();
            $view->with('subscription', $subscription);
        });
    }
}
