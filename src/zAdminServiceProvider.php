<?php
namespace Zeshan77\zAdmin;

use Illuminate\Support\ServiceProvider;

class zAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'zadmin');
    }

}