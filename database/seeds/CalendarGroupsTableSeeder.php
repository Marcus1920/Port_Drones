<<<<<<< HEAD
<?php

use Illuminate\Database\Seeder;
use App\CalendarGroup;

class CalendarGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calendargroups = [

            [
                'id'=>'',
                'name'=>'',
                'description'=>'description',
            ]

        ];

        foreach ($calendargroups as $calendargroup){

            CalendarGroup::create($calendargroup);
        }
    }
}
=======
<?php

use Illuminate\Database\Seeder;
use App\CalendarGroup;

class CalendarGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calendargroups = [

            [
                'id'=>'',
                'name'=>'',
                'description'=>'description',
            ]

        ];

        foreach ($calendargroups as $calendargroup){

            CalendarGroup::create($calendargroup);
        }
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
