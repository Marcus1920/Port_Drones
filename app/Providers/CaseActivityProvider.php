<<<<<<< HEAD
<?php

namespace App\Providers;

use App\services\CaseActivityService;
use Illuminate\Support\ServiceProvider;

class CaseActivityProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(CaseActivityService::class,function($app){
            return new CaseActivityService();
        });
    }
}
=======
<?php

namespace App\Providers;

use App\services\CaseActivityService;
use Illuminate\Support\ServiceProvider;

class CaseActivityProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(CaseActivityService::class,function($app){
            return new CaseActivityService();
        });
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
