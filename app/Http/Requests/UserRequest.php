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
            'username' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:8|numeric|symboles',
            'tel' => 'bail|required|digit:10'
        ];
    }
}
