<<<<<<< HEAD
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TaskReminderService;

class TaskReminderServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(TaskReminderService::class,  function($app)
        {
            return new TaskReminderService();
        });
    }
}
=======
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TaskReminderService;

class TaskReminderServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(TaskReminderService::class,  function($app)
        {
            return new TaskReminderService();
        });
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
