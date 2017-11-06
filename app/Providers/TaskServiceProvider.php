<<<<<<< HEAD
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\services\TaskService;

class TaskServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {

        $this->app->bind(TaskService::class,function($app){
            return new TaskService(
                $app->make('App\services\TaskOwnerService')
                );
        });
    }
}
=======
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\services\TaskService;

class TaskServiceProvider extends ServiceProvider
{

    public function boot()
    {

    }

    public function register()
    {

        $this->app->bind(TaskService::class,function($app){
            return new TaskService(
                $app->make('App\services\TaskOwnerService')
                );
        });
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
