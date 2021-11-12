<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatJobFormRequest extends FormRequest
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
            'job_title' => ['required'],
            'job_type'=> ['required','exists:job_types,id'],
            'job_categories'=> ['required','exists:job_categories,id'] ,
            'job_descriptions'=> ['required'],
            'work_conditions' => ['required','exists:work_conditions,id'],
        ];
    }
}
