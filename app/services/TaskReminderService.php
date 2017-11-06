<<<<<<< HEAD
<?php


namespace App\services;
use App\TaskReminder;


class TaskReminderService
{

     public function getReminders()
     {
         return TaskReminder::all();
     }

    public function createReminders($request)
    {
        $reminderObj            = new TaskReminder();
        $reminderObj->task_id   = $request['task_id'];
        $reminderObj->user_id   = $request['user_id'];
        $reminderObj->repeat    = 0;
        $reminderObj->duration  = $request['duration'];
        $reminderObj->save();
        return $reminderObj;
    }
    public function deleteReminders($id)
    {
        $reminderObj            =TaskReminder::find($id);
        $reminderObj->delete();
        return $reminderObj;
    }
}

=======
<?php


namespace App\services;
use App\TaskReminder;


class TaskReminderService
{

     public function getReminders()
     {
         return TaskReminder::all();
     }

    public function createReminders($request)
    {
        $reminderObj            = new TaskReminder();
        $reminderObj->task_id   = $request['task_id'];
        $reminderObj->user_id   = $request['user_id'];
        $reminderObj->repeat    = 0;
        $reminderObj->duration  = $request['duration'];
        $reminderObj->save();
        return $reminderObj;
    }
    public function deleteReminders($id)
    {
        $reminderObj            =TaskReminder::find($id);
        $reminderObj->delete();
        return $reminderObj;
    }
}

>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
