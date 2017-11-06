<<<<<<< HEAD
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TaskFileService;

class TaskFileProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TaskFileService::class,function ($app){
            return new TaskFileService();
        });
    }
}
=======
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TaskFileService;

class TaskFileProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TaskFileService::class,function ($app){
            return new TaskFileService();
        });
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
