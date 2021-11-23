<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Foundation\Http\FormRequest;

class CreateMedicalRecordRequest extends FormRequest
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

            'location' => ['required'],
            'quantity' => ['required'],

            'date' => ['required'],
            'orari' => ['required'],

            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'cellphone' => ['required'],
            'nationality' => ['required'],
            'fiscal_code' => ['required'],
            'date_of_birth' => ['required'],
            'gender' => ['required'],
            'municipality' => ['required'],
            'zip_code' => ['required'],
            'address' => ['required'],
            'terms_conditions' => ['required'],
            'personal_data' => ['required'],

            'f_name' => ['required'],
            'l_name' => ['required'],
            'invoice_email' => ['required'],
            'f_code' => ['required'],
            'indirizzo' => ['required'],
            'citta' => ['required'],
            'postal_code' => ['required'],
            'provinzia' => ['required'],
            'nazione' => ['required']
        ];
    }
    public function messages()
    {

        return [
            'loaction.required' => 'please select an option',
            'date.required' => 'please select a date',
            'orari.required' => 'please select a time',

            'first_name.required' => 'this field is required',
            'last_name.required' => 'this field is required',
            'email.required' => 'this field is required',
            'cellphone.required' => 'this field is required',
            'nationality.required' => 'this field is required',
            'date_of_birth.required' => 'this field is required',
            'gender.required' => 'this checkbox is required',
            'municipality.required' => 'this field is required',
            'zip_code.required' => 'this field is required',
            'address.required' => 'this field is required',
            'terms_conditions.required' => 'this checkbox is required',
            'personal_data.required' => 'this checkbox is required',

            'f_name.required' => 'this field is required',
            'l_name.required' => 'this field is required',
            'invoice_email.required' => 'this field is required',
            'f_code.required' => 'this field is required',
            'indirizzo.required' => 'this field is required',
            'citta.required' => 'this field is required',
            'postal_code.required' => 'this field is required',
            'provinzia.required' => 'this field is required',
            'nazione.required' => 'this field is required',


        ];
    }
}
