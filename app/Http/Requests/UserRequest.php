<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'mem_Name'=>'required',
            'user_Name'=>'required',
            'password'=>'required',
            'phone_no'=>'required|numeric',
            'pic'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'mem_Name.required'=>'Name can not be empty',
            'user_Name.required'=>'User name is required',
            'password.required'=>'password can not be empty',
            'phone_no.required'=>'please provide  phone number ',
            'phone_no.numeric'=>'Phone No must be numeric ',
            'pic.required'=>'Please choose a picture '


        ];
    }
}
