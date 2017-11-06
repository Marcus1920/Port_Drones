<<<<<<< HEAD
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class MeetingFile extends Eloquent
{


    protected $table    = 'meetings_files';
    protected $fillable = ['meeting_id','user','file','addressbook','file_note','img_url','active'];



}
=======
<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class MeetingFile extends Eloquent
{


    protected $table    = 'meetings_files';
    protected $fillable = ['meeting_id','user','file','addressbook','file_note','img_url','active'];



}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
