<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserNew extends Eloquent
{

    protected $table    = 'users';
    protected $fillable = ['name', 'email', 'password','surname','role','cellphone','username','api_key','department'];
	
	 public function teamember()
    {
        return $this->hasMany('App\Teamlers');
    }
	
	
	 public function bookoftime()
    {
        return $this->hasMany('App\BooktimeOffs');
    }
	
	
	
	
	 public function usereportdeatils ()
    {
        return $this->hasMany('App\UserReportdetails');
    }
}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserNew extends Eloquent
{

    protected $table    = 'users';
    protected $fillable = ['name', 'email', 'password','surname','role','cellphone','username','api_key','department'];
	
	 public function teamember()
    {
        return $this->hasMany('App\Teamlers');
    }
	
	
	 public function bookoftime()
    {
        return $this->hasMany('App\BooktimeOffs');
    }
	
	
	
	
	 public function usereportdeatils ()
    {
        return $this->hasMany('App\UserReportdetails');
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
