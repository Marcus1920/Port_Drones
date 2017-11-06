<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskReminder extends Eloquent
{
    protected $table     = 'task_reminders';

    
    public  function task(){

        return $this->belongsTo(Task::class);
    }

}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskReminder extends Eloquent
{
    protected $table     = 'task_reminders';

    
    public  function task(){

        return $this->belongsTo(Task::class);
    }

}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
