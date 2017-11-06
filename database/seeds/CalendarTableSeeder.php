<<<<<<< HEAD
<?php

use Illuminate\Database\Seeder;
use App\Calendar;

class CalendarTableSeeder extends Seeder
{
    public function run()
    {

        $calendars = [

            [ 'id'=>'1',
                'name' => 'Case',
                'description' =>'cases',
                'calendar_group_id' =>''
            ],
            [ 'id'=>'2',
                'name' => 'Task',
                'description' =>'Tasks',
                 'calendar_group_id' =>''
            ],
            [ 'id'=>'3',
                'name' => 'Meeting',
                'description' =>'meetings',
                 'calendar_group_id' =>''
            ],
            [ 'id'=>'4',
                'name' => 'Reminder',
                'description' =>'reminders',
                'calendar_group_id' =>''
            ],

        ];

        foreach ($calendars as $calendar) {

            Calendar::create($calendar);
        }

    }
}
=======
<?php

use Illuminate\Database\Seeder;
use App\Calendar;

class CalendarTableSeeder extends Seeder
{
    public function run()
    {

        $calendars = [

            [ 'id'=>'1',
                'name' => 'Case',
                'description' =>'cases',
                'calendar_group_id' =>''
            ],
            [ 'id'=>'2',
                'name' => 'Task',
                'description' =>'Tasks',
                 'calendar_group_id' =>''
            ],
            [ 'id'=>'3',
                'name' => 'Meeting',
                'description' =>'meetings',
                 'calendar_group_id' =>''
            ],
            [ 'id'=>'4',
                'name' => 'Reminder',
                'description' =>'reminders',
                'calendar_group_id' =>''
            ],

        ];

        foreach ($calendars as $calendar) {

            Calendar::create($calendar);
        }

    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
