<?php

namespace AlysonRodrigo\Package\Providers;

use Illuminate\Support\ServiceProvider;

class PackageProvider extends ServiceProvider
{

    public function boot(){

        $this->loadViewsFrom(__DIR__ . '/../Views', 'package');

        $this->publishes([
           __DIR__ . '/../Views' => resource_path('views/vendor/alysonrodrigo/package'),
        ],'views');

        $this->publishes([
           __DIR__ . '/../Migrations' => database_path('migrations/')
        ],'views');
    }

    public function register(){

        include __DIR__ . '/../Routes/web.php';

    }

}