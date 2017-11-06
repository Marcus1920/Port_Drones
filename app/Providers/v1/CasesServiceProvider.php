<<<<<<< HEAD
<?php

namespace App\Providers\v1;
use App\services\v1;
use App\services\v1\CaseService;
use Illuminate\Support\ServiceProvider;


class CasesServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(CaseService::class,function($app){

            return new CaseService($app->make('App\services\CaseResponderService'),
                                   $app->make('App\services\CaseOwnerService')
               );
        });

    }
}
=======
<?php

namespace App\Providers\v1;
use App\services\v1;
use App\services\v1\CaseService;
use Illuminate\Support\ServiceProvider;


class CasesServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(CaseService::class,function($app){

            return new CaseService($app->make('App\services\CaseResponderService'),
                                   $app->make('App\services\CaseOwnerService')
               );
        });

    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
