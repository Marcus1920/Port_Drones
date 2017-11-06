<<<<<<< HEAD
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CalendarGroup extends Eloquent
{
    protected $table    = 'calendar_groups';
    protected $fillable = ['name','description'];

    public function calendar(){

        return $this->hasMany(Calendar::class);
    }
    public function calendarGroup(){

        return $this->belongsToMany(CalendarGroup::class);
    }

}
=======
<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CalendarGroup extends Eloquent
{
    protected $table    = 'calendar_groups';
    protected $fillable = ['name','description'];

    public function calendar(){

        return $this->hasMany(Calendar::class);
    }
    public function calendarGroup(){

        return $this->belongsToMany(CalendarGroup::class);
    }

}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
