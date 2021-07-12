<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JokeRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'joke' => 'required',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'O campo CFOP é de preenchimento obrigatório',
            'email.required' => 'O campo Nome é de preenchimento obrigatório',
            'joke.required' => 'O campo Nome é de preenchimento obrigatório',
        ];
    }
}