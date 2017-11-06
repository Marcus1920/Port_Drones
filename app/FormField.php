<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class FormField extends Eloquent {
	protected $table    = 'forms_fields';
	protected $fillable = ['form_id','label','name','desc','order','type','options', 'table'];
	
	/*public function saveFields($id) {
		$saved = true;
		//parent::save();
		return $saved;
	}*/
}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class FormField extends Eloquent {
	protected $table    = 'forms_fields';
	protected $fillable = ['form_id','label','name','desc','order','type','options', 'table'];
	
	/*public function saveFields($id) {
		$saved = true;
		//parent::save();
		return $saved;
	}*/
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
