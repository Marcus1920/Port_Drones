<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskNote extends Eloquent
{

    protected $table    = 'tasks_notes';

    public  function task(){

        return $this->belongsTo(Task::class);
    }

    public  function user(){

        return $this->belongsTo(User::class,'created_by','id');
    }


}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskNote extends Eloquent
{

    protected $table    = 'tasks_notes';

    public  function task(){

        return $this->belongsTo(Task::class);
    }

    public  function user(){

        return $this->belongsTo(User::class,'created_by','id');
    }


}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
