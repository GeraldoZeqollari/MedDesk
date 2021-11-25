<?php

namespace App\Http\Controllers;


use App\Models\Invoice;
use App\Models\Location;
use App\Models\PersonalData;
use App\Http\Requests\CreateMedicalRecordRequest;
use App\Models\Date;
use App\Models\Orari;

class MedicalFormController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $dates = Date::all();
        $oraris = Orari::all();


        return view('home')->with(compact('locations', 'dates', 'oraris'));
    }

    public function store(CreateMedicalRecordRequest $request)
    {

        // $validated = $request->validated();

        
        $personal_data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'cellphone' => $request->cellphone,
            'nationality' => $request->nationality,
            'fiscal_code' => $request->fiscal_code,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'municipality' => $request->municipality,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'terms_conditions' => $request->terms_conditions,
            'personal_data' => $request->personal_data

        ];
        PersonalData::create($personal_data);

        $invoice = [
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'invoice_email' => $request->invoice_email,
            'f_code' => $request->f_code,
            'indirizzo' => $request->indirizzo,
            'citta' => $request->citta,
            'postal_code' => $request->postal_code,
            'provinzia' => $request->provinzia,
            'nazione' => $request->nazione
        ];
        Invoice::create($invoice);


        // Location::create([
        //     'location' => $request->location
        // ]);


        // Date::create([
        //     'date' => $request->date
        // ]);

        // Orari::create([
        //     'orari' => $request->orari
        // ]);

        return back()->with("status", "Success");
    }
}
