<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEventType extends Model
{
    protected $fillable = ['name', 'slug'];

    public function calenderEvent()
    {
        return $this->belongsToMany(CalendarEvent::class);
    }

    public function calender()
    {
        return $this->belongsTo(Calendar::class);
    }
}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEventType extends Model
{
    protected $fillable = ['name', 'slug'];

    public function calenderEvent()
    {
        return $this->belongsToMany(CalendarEvent::class);
    }

    public function calender()
    {
        return $this->belongsTo(Calendar::class);
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
