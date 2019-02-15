<?php
namespace Zeshan77\zAdmin;

use Illuminate\Support\ServiceProvider;

class zAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'zadmin');

        $this->publishes([__DIR__ . '/views' => resource_path('views/vendor/zadmin')]);
    }

}