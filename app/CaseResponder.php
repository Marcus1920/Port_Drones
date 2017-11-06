<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CaseResponder extends Eloquent
{

    protected $table    = 'responders';

    public function responderTypeFunc() {

        return $this->hasOne('App\ResponderType','id','responder_type');
    }

    public function user() {

        return $this->hasOne('App\User','id','responder');
    }


}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CaseResponder extends Eloquent
{

    protected $table    = 'responders';

    public function responderTypeFunc() {

        return $this->hasOne('App\ResponderType','id','responder_type');
    }

    public function user() {

        return $this->hasOne('App\User','id','responder');
    }


}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
