<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Message extends Eloquent
{

    protected $table    = 'messages';
    protected $fillable = ['from','to','message','active','online','caseID'];

}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Message extends Eloquent
{

    protected $table    = 'messages';
    protected $fillable = ['from','to','message','active','online','caseID'];

}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
