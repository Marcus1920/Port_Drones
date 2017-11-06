<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CaseEscalator extends Eloquent
{


    protected $table    = 'cases_escalations';
    protected $fillable = ['case_id','user','type','active','message'];

}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CaseEscalator extends Eloquent
{


    protected $table    = 'cases_escalations';
    protected $fillable = ['case_id','user','type','active','message'];

}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
