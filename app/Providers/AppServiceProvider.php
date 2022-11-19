<?php

namespace App\Providers;

use App\Http\Resources\QuoteResource;
use Illuminate\Http\Resources\Json\JsonResource;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // only quote resource
        QuoteResource::withoutWrapping();

        // or all json resource
        JsonResource::withoutWrapping();
    }
}
