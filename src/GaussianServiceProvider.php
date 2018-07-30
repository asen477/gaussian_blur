<?php
namespace asen477\gaussian_blur;

use Illuminate\Support\ServiceProvider;

class GaussianServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('gaussian_blur', function () {
            return new Gaussian_blur;
        });
    }
}