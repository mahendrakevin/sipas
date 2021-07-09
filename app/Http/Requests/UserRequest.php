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
            'nip' => 'nullable|max:50:|min:3',
            'name' => 'required|max:100:|min:3',
            'phone_number' => 'required|min:8|max:50',
            'email' => 'required|email|unique:users|max:50|min:5',
            'password' => 'required|min:6|max:50',
            'level_id' => 'required|exists:App\Models\Level,id',
            'department_id' => 'required|exists:App\Models\Department,id',
        ];
    }
}