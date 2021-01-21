<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
class blogRequest extends FormRequest
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
    public function rules(Request $Request)
    {
        $rules = array();
        switch ($this->method()) {
            case 'POST':
            {
                $rules['image'] = 'image|mimes:png,jpg,jpeg,gif,svg|dimensions:width=1170,height=430';
                $rules['title'] = 'required|string';
                $rules['description'] = 'required|string';
            }
            case 'PUT':
            case 'PATCH':
            {
                $rules['image'] = 'image|mimes:png,jpg,jpeg,gif,svg|dimensions:width=1170,height=430';
                $rules['title'] = 'required|string';
                $rules['description'] = 'required|string';
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'title.required' => 'Blog Title is required',
            'description.required' => 'Blog Description is required', 
        ];
    }
}
