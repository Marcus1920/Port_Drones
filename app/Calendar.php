<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Calendar extends Eloquent
{
    protected $table    = 'calendars';
    protected $fillable = ['name','description','calendar_group_id','colour'];

    public function calendarGroup()
    {

        return $this->hasOne(CalendarGroup::class,'id','calendar_group_id');

    }

    public function calendarEventType()
    {

        return $this->hasMany(CalendarEventType::class,'id','event_type_id');

    }
    
}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Calendar extends Eloquent
{
    protected $table    = 'calendars';
    protected $fillable = ['name','description','calendar_group_id','colour'];

    public function calendarGroup()
    {

        return $this->hasOne(CalendarGroup::class,'id','calendar_group_id');

    }

    public function calendarEventType()
    {

        return $this->hasMany(CalendarEventType::class,'id','event_type_id');

    }
    
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
