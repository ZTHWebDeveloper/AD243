<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegisterRequestForm extends FormRequest
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
            'user_name'=>['required', 'string', 'max:255'],
             'user_position'=>'required',
             'user_email'=>['required', 'string', 'email', 'max:255', 'unique:company_registers'],
             'user_password'=>'required',
             'company_name'=>'required',
             'company_location'=>'required',
             'phone_no'=>'required',
             'company_nrc'=>'required',
             'company_overview'=>'required',
             'advertise'=>'required',
        ];
    }
}
//['required', 'string', 'min:8', 'confirmed']
