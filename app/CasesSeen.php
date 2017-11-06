<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasesSeen extends Model
{
<<<<<<< HEAD
    protected $table    = 'cases_seen';
    protected $fillable = ['cid','uid'];
	protected $primaryKey = ['cid','uid'];
	public $incrementing = false;
	const UPDATED_AT = "when";
=======
    protected $table    = 'cases_seen';
    protected $fillable = ['cid','uid'];
	protected $primaryKey = ['cid','uid'];
	public $incrementing = false;
	const UPDATED_AT = "when";
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
	const CREATED_AT = "when";
}
