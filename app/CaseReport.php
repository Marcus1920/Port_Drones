<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CaseReport extends Eloquent
{


    protected $table    = 'cases';
    protected $fillable = ['description','user','department','category','sub_category','sub_sub_category','priority','status','gps_lat','gps_lng','img_url','active','severity','source','address','case_type', 'case_sub_type'];



}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CaseReport extends Eloquent
{


    protected $table    = 'cases';
    protected $fillable = ['description','user','department','category','sub_category','sub_sub_category','priority','status','gps_lat','gps_lng','img_url','active','severity','source','address','case_type', 'case_sub_type'];



}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
