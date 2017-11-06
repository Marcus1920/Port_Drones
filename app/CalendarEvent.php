<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    public function meeting()
    {
        return $this->hasMany(Meeting::class,'id','event_id');
    }

    public function task()
    {
        return $this->hasMany(Task::class,'id','event_id');
    }

    public function caseReport()
    {
        return $this->hasMany(CaseReport::class,'id','event_id');
    }

    public  function calendarEventType(){

        return $this->hasone(CalendarEventType::class,'id','event_type_id');
    }
}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    public function meeting()
    {
        return $this->hasMany(Meeting::class,'id','event_id');
    }

    public function task()
    {
        return $this->hasMany(Task::class,'id','event_id');
    }

    public function caseReport()
    {
        return $this->hasMany(CaseReport::class,'id','event_id');
    }

    public  function calendarEventType(){

        return $this->hasone(CalendarEventType::class,'id','event_type_id');
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
