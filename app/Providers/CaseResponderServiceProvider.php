<<<<<<< HEAD
<?php

namespace App\Providers;

use App\services\CaseResponderService;
use Illuminate\Support\ServiceProvider;

class CaseResponderServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(CaseResponderService::class,function(){

            return new CaseResponderService();

        });
    }
}
=======
<?php

namespace App\Providers;

use App\services\CaseResponderService;
use Illuminate\Support\ServiceProvider;

class CaseResponderServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(CaseResponderService::class,function(){

            return new CaseResponderService();

        });
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
