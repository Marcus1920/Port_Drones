<<<<<<< HEAD
<?php

namespace App\Services;
use App\Http\Requests;
use App\TaskNote;
use Auth;

class TaskNoteService
{
 public function getNotes()
 {
     return TaskNote::with('user')->with('task')->orderBy('id','DESC')->get();

 }
 public function createNotes($request)
 {
     $taskNote                 = new TaskNote();
     $taskNote->task_id        = $request['task_id'];
     $taskNote->note           = $request['note'];
     $taskNote->created_by     = Auth::user()->id;
     $taskNote->save();
     return $taskNote->with('user')->first();
 }


=======
<?php

namespace App\Services;
use App\Http\Requests;
use App\TaskNote;
use Auth;

class TaskNoteService
{
 public function getNotes()
 {
     return TaskNote::with('user')->with('task')->orderBy('id','DESC')->get();

 }
 public function createNotes($request)
 {
     $taskNote                 = new TaskNote();
     $taskNote->task_id        = $request['task_id'];
     $taskNote->note           = $request['note'];
     $taskNote->created_by     = Auth::user()->id;
     $taskNote->save();
     return $taskNote->with('user')->first();
 }


>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
}