<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMessageRequest extends FormRequest
{
    public function authorize()
    {
        //autorizamos a todo el mundo a poder enviar mensajes: return true.
        return true;
    }

    public function rules()
    {
        return [
          'nombre' => 'required',
          'email' => 'required|email',
          'mensaje' => 'required|min:5'
        ];
    }
}
