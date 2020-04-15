<?php

namespace  HotzApp;


use Illuminate\Support\ServiceProvider;

class HotzAppServiceProvider extends ServiceProvider
{
   
    public function boot()
    {
        
    }

   
    public function register()
    {
        $this->app->singleton('HotzApp', function() {
            return new HotzApp;
        });
    }
}
