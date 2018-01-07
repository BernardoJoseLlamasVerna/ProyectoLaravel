<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
      //dd($this->route('usuario'));
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$this->route('usuario')
        ];
    }
}
