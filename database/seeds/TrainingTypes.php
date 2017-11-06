<<<<<<< HEAD
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TrainingType;


class TrainingTypes extends Seeder
{
    public function run()
    {
        
        DB::table('training_types')->truncate();
        TrainingType::create(['id' => '1','slug' => 'Security','name' => 'Security']);
        TrainingType::create(['id' => '2','slug' => 'Military','name' => 'Military']);
        TrainingType::create(['id' => '3','slug' => 'Police','name' => 'Police']);
      
       

    }
}
=======
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TrainingType;


class TrainingTypes extends Seeder
{
    public function run()
    {
        
        DB::table('training_types')->truncate();
        TrainingType::create(['id' => '1','slug' => 'Security','name' => 'Security']);
        TrainingType::create(['id' => '2','slug' => 'Military','name' => 'Military']);
        TrainingType::create(['id' => '3','slug' => 'Police','name' => 'Police']);
      
       

    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
