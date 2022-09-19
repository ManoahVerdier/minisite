<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class ContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Merci de saisir votre nom',
            'email.required' => 'Merci de saisir votre mail',
            'telephone.required' => 'Merci de saisir votre téléphone',
            'captcha.required' => 'Merci de valdier le captcha',
            'validation.required' => 'Ce champ est requis',
        ];
    }
}
