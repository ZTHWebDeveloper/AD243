<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'company_name'=>'required',
            'post_title'=>'required',
            'post_content'=>'required',
            'file1'=>'required|max:1000',
            'file2'=>'required|max:1000',
            'file3'=>'required|max:1000',
        ];
    }
}
