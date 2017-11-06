<<<<<<< HEAD
<?php

namespace App;

use App\Http\Requests\TaskCategoryRequest;
use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskCategory extends Eloquent
{
    protected $table    = 'task_categories';
    protected $fillable = ['name','color','slug'];


    public function task(){

        return $this->belongsTo(Task::class);
    }


    public function addTaskCategory($data){

        TaskCategory::create([ 'name' => $data['name'],'slug' => $data['name'],'color' => $data['color']]);
    }

    public function editTaskCategory($data){

        $taskCategory             = TaskCategory::find($data['task_category_id']);
        $taskCategory->name       = $data['color_name'];
        $taskCategory->color      = $data['color_code'];
        $taskCategory->save();
    }

    public function getTaskCategories(){

        return TaskCategory::all();

    }



}
=======
<?php

namespace App;

use App\Http\Requests\TaskCategoryRequest;
use Illuminate\Database\Eloquent\Model as Eloquent;

class TaskCategory extends Eloquent
{
    protected $table    = 'task_categories';
    protected $fillable = ['name','color','slug'];


    public function task(){

        return $this->belongsTo(Task::class);
    }


    public function addTaskCategory($data){

        TaskCategory::create([ 'name' => $data['name'],'slug' => $data['name'],'color' => $data['color']]);
    }

    public function editTaskCategory($data){

        $taskCategory             = TaskCategory::find($data['task_category_id']);
        $taskCategory->name       = $data['color_name'];
        $taskCategory->color      = $data['color_code'];
        $taskCategory->save();
    }

    public function getTaskCategories(){

        return TaskCategory::all();

    }



}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
