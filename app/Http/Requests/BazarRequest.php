<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BazarRequest extends FormRequest
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
            'date'=>'required',
            'items'=>'required',
            'cost'=>'required'
        ];
    }
    public function message()
    {
        return[
            'date.required'=>'Please put the date',
            'items.required'=>'Please put the items',
            'cost.required'=>'Please put the cost'
        ];
    }
}
