<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Meeting extends Eloquent
{


    protected $table    = 'meetings';
    protected $fillable = ['title','description','name','date','start_time','end_time','facilitator','venue','file_url','created_by','updated_by'];


}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Meeting extends Eloquent
{


    protected $table    = 'meetings';
    protected $fillable = ['title','description','name','date','start_time','end_time','facilitator','venue','file_url','created_by','updated_by'];


}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
