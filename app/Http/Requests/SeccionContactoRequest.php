<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidRecaptcha;

class SeccionContactoRequest extends FormRequest
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
            'nombre'   => 'required | string ',
            'telefono' => 'required | string ',
            'empresa'  => 'required | string',
            'email'    => 'required | email',
            'mensaje'    => 'required | string',
            'g-recaptcha-response' => ['required', new ValidRecaptcha] 
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'ReCaptcha requerido!',
            'g-recaptcha-response.captcha'  => 'Captcha error! Inténtalo de nuevo!',
        ];
    }
}
