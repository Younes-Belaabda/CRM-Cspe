<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreContratRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'nom' => 'required|min:2|regex:/^[a-zA-Z]{2,}$/i',
            // 'prenom' => 'required|regex:/^[a-zA-Z]{2,}$/i',
            // 'bday'    => 'required',
            // 'bmonth'  => 'required',
            // 'byear'   => 'required',
            // 'adresse' => 'required',
            // 'zipcode'    => 'required|min:5|max:5|regex:/^[0-9]{5,5}$/i',
            // 'ville'  => 'required|regex:/^[a-zA-Z]{2,}$/i',
            // 'pays'   => 'required|regex:/^[a-zA-Z]{2,}$/i',
            // 'mobile' => 'required|regex:/^[0-9]{2,}$/i',
            // 'phone' =>  'nullable|regex:/^[0-9]{2,}$/i',
            // 'mail'   => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/',
            // 'iban'   => 'required|unique:contrats,iban|regex:/^(FR)[0-9]*$/i',
            // 'bic'    => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire !',
            'nom.regex'    => 'Le nom ne doit pas contenir des chiffres !',
            'nom.min'      => 'Le nom doit contenir au moins deux caracteres !',
            'prenom.required' => 'Le prénom est obligatoire !',
            'prenom.regex'    => 'Le prénom ne doit pas contenir des chiffres !',
            'prenom.min'      => 'Le prénom doit contenir au moins deux caracteres !',
            'bday.required'  => 'Le jour et obligatoire !',
            'bmonth.required'=> 'Le mois et obligatoire !',
            'byear.required' => 'L\'année et obligatoire !',
            'adresse.required' => 'L\'adresse est obligatoire !',
            'zipcode.required' => 'Le code postale est obligatoire !',
            'zipcode.regex' => 'Le code postale doit contenir que des chiffres !',
            'iban.required' => 'L\'iban est obligatoire !',
            'iban.regex' => 'L\'iban ce n\'est pas correct !',
            'iban.unique' => 'L\'iban doublons !',
            'mail.required' => 'L\'email est obligatoire !',
            'mail.regex' => 'L\'email n\'est pas correct !',
            'ville.required' => 'La ville est obligatoire !',
            'ville.regex' => 'La ville n\'est pas correct !',
            // 'mail.unique' => 'L\'email n\'est pas correct !',
        ];
    }



}
