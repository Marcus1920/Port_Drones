<<<<<<< HEAD
<?php

namespace App\Providers;

use App\services\CaseOwnerService;
use Illuminate\Support\ServiceProvider;

class CaseOwnerServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(CaseOwnerService::class,function($app){
            return new CaseOwnerService(
                $app->make('App\services\CaseResponderService'),
                $app->make('App\services\CaseActivityService'));
        });
    }

}
=======
<?php

namespace App\Providers;

use App\services\CaseOwnerService;
use Illuminate\Support\ServiceProvider;

class CaseOwnerServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(CaseOwnerService::class,function($app){
            return new CaseOwnerService(
                $app->make('App\services\CaseResponderService'),
                $app->make('App\services\CaseActivityService'));
        });
    }

}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
