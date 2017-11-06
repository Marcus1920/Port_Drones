<<<<<<< HEAD
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TaskOwnerService;

class TaskOwnerServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(TaskOwnerService::class, function ($app) {
            return new TaskOwnerService();
        });
    }
}
=======
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TaskOwnerService;

class TaskOwnerServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind(TaskOwnerService::class, function ($app) {
            return new TaskOwnerService();
        });
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
