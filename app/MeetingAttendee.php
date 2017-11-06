<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class MeetingAttendee extends Eloquent
{


    protected $table    = 'meetings_attendees';
    protected $fillable = ['meeting','attendee','created_by','updated_by','phonebook','mobile'];



}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class MeetingAttendee extends Eloquent
{


    protected $table    = 'meetings_attendees';
    protected $fillable = ['meeting','attendee','created_by','updated_by','phonebook','mobile'];



}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
