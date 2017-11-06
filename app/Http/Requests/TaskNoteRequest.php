<<<<<<< HEAD
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskNoteRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'note' => 'required'
        ];
    }
}
=======
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskNoteRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'note' => 'required'
        ];
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
