<<<<<<< HEAD
<?php

namespace App\Providers;

use App\services\CaseTypeService;
use Illuminate\Support\ServiceProvider;

class CaseTypeServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(CaseTypeService::class,function(){

                return new CaseTypeService();
        });
    }
}
=======
<?php

namespace App\Providers;

use App\services\CaseTypeService;
use Illuminate\Support\ServiceProvider;

class CaseTypeServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(CaseTypeService::class,function(){

                return new CaseTypeService();
        });
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
