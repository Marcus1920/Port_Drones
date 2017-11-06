<<<<<<< HEAD
<?php
/**
 * Created by PhpStorm.
 * User: Thandekah
 * Date: 6/23/2017
 * Time: 10:00 AM
 */

namespace App\services;
use App\TaskActivity;
use Auth;


class TaskActivityService
{
    public function getTaskActivities()
    {
        return TaskActivity::with('user')->with('task')->orderBy('id','DESC')->take(5)->get();
    }
    public function createTaskActivity($request)
    {
        $taskActivity                 = new TaskActivity();
        $taskActivity->task_id        = $request['task_id'];
        $taskActivity->note           = $request['activity_note'];
        $taskActivity->created_by     = Auth::user()->id;
        $taskActivity->save();
        return $taskActivity;
    }
=======
<?php
/**
 * Created by PhpStorm.
 * User: Thandekah
 * Date: 6/23/2017
 * Time: 10:00 AM
 */

namespace App\services;
use App\TaskActivity;
use Auth;


class TaskActivityService
{
    public function getTaskActivities()
    {
        return TaskActivity::with('user')->with('task')->orderBy('id','DESC')->take(5)->get();
    }
    public function createTaskActivity($request)
    {
        $taskActivity                 = new TaskActivity();
        $taskActivity->task_id        = $request['task_id'];
        $taskActivity->note           = $request['activity_note'];
        $taskActivity->created_by     = Auth::user()->id;
        $taskActivity->save();
        return $taskActivity;
    }
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
}