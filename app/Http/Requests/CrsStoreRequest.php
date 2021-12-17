<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrsStoreRequest extends FormRequest
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
            //
            'first_name' =>  ['required', 'string', 'max:255'],
            'last_name' =>  ['required', 'string', 'max:255'],
            'email' =>  ['required', 'string', 'email','unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string', 'max:11', 'unique:users'],
            'employee_code' => ['required', 'string', 'max:49', 'unique:users'],
            'role_id' => ['required']
        ];
    }
}


/*
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:11', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
*/
