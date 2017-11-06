<<<<<<< HEAD
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskEditRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'complete'=>'digits_between:1,3|numeric|max:100',
        ];
    }
}
=======
<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskEditRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'complete'=>'digits_between:1,3|numeric|max:100',
        ];
    }
}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
