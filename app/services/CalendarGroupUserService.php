<<<<<<< HEAD
<?php

namespace App\services;
use App\CalendarGroupUser;


class CalendarGroupUserService
{
    public function getCalendarGroupUsers()
    {
        return CalendarGroupUser::all();
    }

    public function getCalendarGroupUsersPerGroup($id)
    {
        return CalendarGroupUser::with('user')->where('calendar_group_id',$id)->get();
    }

    public function createCalendarGroupUser($calendarGroup_id,$user_group_id)
    {
        $calendarGroupUser                    = new CalendarGroupUser();
        $calendarGroupUser->calendar_group_id = $calendarGroup_id;
        $calendarGroupUser->user_group_id     = $user_group_id;
        $calendarGroupUser->save();
        return $calendarGroupUser;
    }
=======
<?php

namespace App\services;
use App\CalendarGroupUser;


class CalendarGroupUserService
{
    public function getCalendarGroupUsers()
    {
        return CalendarGroupUser::all();
    }

    public function getCalendarGroupUsersPerGroup($id)
    {
        return CalendarGroupUser::with('user')->where('calendar_group_id',$id)->get();
    }

    public function createCalendarGroupUser($calendarGroup_id,$user_group_id)
    {
        $calendarGroupUser                    = new CalendarGroupUser();
        $calendarGroupUser->calendar_group_id = $calendarGroup_id;
        $calendarGroupUser->user_group_id     = $user_group_id;
        $calendarGroupUser->save();
        return $calendarGroupUser;
    }
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
}