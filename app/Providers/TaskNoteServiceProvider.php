<<<<<<< HEAD
<?php

namespace App\Providers;

use App\Services\TaskNoteService;
use Illuminate\Support\ServiceProvider;

class TaskNoteServiceProvider extends ServiceProvider
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
        $this->app->bind(TaskNoteService::class, function ($app) {
            return new TaskNoteService();
        });

    }
}
=======
<?php

namespace App\Providers;

use App\Services\TaskNoteService;
use Illuminate\Support\ServiceProvider;

class TaskNoteServiceProvider extends ServiceProvider
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
        $this->app->bind(TaskNoteService::class, function ($app) {
            return new TaskNoteService();
        });

    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
