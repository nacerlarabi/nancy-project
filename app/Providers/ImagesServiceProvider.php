<?php

namespace App\Providers;

use App\Services\ImagesService;
use Faker\Provider\Image;
use Illuminate\Support\ServiceProvider;

class ImagesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ImagesService::class, function($app){

            return new ImagesService(config('images'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
