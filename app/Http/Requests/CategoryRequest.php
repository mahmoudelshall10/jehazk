<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class CategoryRequest extends FormRequest
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
        $rules = array(
                'fldCategoryName' => 'required|max:30',
            );

        if(!empty(Input::get('fkParentID'))){
            $rules['fkParentID'] = 'integer';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'fldCategoryName.required' => 'Category Name is required',  
        ];
    }
}
