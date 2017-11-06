<<<<<<< HEAD
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'task_category_id' => 'required|not_in:0',
            'priority_id'      => 'required|not_in:0',
            'title'            => 'required',
            'task_user_id'     => 'required'
        ];
    }
}
=======
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'task_category_id' => 'required|not_in:0',
            'priority_id'      => 'required|not_in:0',
            'title'            => 'required',
            'task_user_id'     => 'required'
        ];
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
