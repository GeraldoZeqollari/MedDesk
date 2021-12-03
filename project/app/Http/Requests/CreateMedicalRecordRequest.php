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

            // 'location' => ['required'],
            // 'quantity' => ['required'],

            // 'date' => ['required'],
            // 'orari' => ['required'],

            // 'first_name' => ['required'],
            // 'last_name' => ['required'],
            // 'email' => ['required'],
            // 'cellphone' => ['required'],
            // 'nationality' => ['required'],
            // 'fiscal_code' => ['required'],
            // 'date_of_birth' => ['required'],
            // 'gender' => ['required'],
            // 'municipality' => ['required'],
            // 'zip_code' => ['required'],
            // 'address' => ['required'],
            // 'terms_conditions' => ['required'],
            // 'personal_data' => ['required'],

            // 'f_name' => ['required'],
            // 'l_name' => ['required'],
            // 'invoice_email' => ['required'],
            // 'f_code' => ['required'],
            // 'indirizzo' => ['required'],
            // 'citta' => ['required'],
            // 'postal_code' => ['required'],
            // 'provinzia' => ['required'],
            // 'nazione' => ['required']
        ];
    }
    public function messages()
    {

        return [];
    }
}
