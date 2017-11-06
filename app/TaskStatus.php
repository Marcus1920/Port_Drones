<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskStatus extends Eloquent
{
    protected $table = 'task_statuses';
    protected $fillable = ['id','name','slug'];

    public function task(){

        return $this->belongsTo(Task::class,'status_id','id');

    }

}


=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskStatus extends Eloquent
{
    protected $table = 'task_statuses';
    protected $fillable = ['id','name','slug'];

    public function task(){

        return $this->belongsTo(Task::class,'status_id','id');

    }

}


>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
