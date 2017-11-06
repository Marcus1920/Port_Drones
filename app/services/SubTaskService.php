<<<<<<< HEAD
<?php


namespace App\services;
use App\SubTask;
use Auth;


class SubTaskService

{


    public function getSubTasks()
    {
        return SubTask::all();
    }

    public function createSubTask($request,$subTaskId)
    {

        $subTaskobj= new SubTask();
        $subTaskobj->task_id = $request['task_id'];
        $subTaskobj->sub_task_id = $subTaskId;
        $subTaskobj->created_by     = Auth::user()->id;
        $subTaskobj->save();
        return $subTaskobj;

    }

=======
<?php


namespace App\services;
use App\SubTask;
use Auth;


class SubTaskService

{


    public function getSubTasks()
    {
        return SubTask::all();
    }

    public function createSubTask($request,$subTaskId)
    {

        $subTaskobj= new SubTask();
        $subTaskobj->task_id = $request['task_id'];
        $subTaskobj->sub_task_id = $subTaskId;
        $subTaskobj->created_by     = Auth::user()->id;
        $subTaskobj->save();
        return $subTaskobj;

    }

>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
}