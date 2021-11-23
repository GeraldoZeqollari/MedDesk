<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvoiceRequest;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    // public function index()
    // {
    //     return view('home');
    // }

    // public function store(CreateInvoiceRequest $request)
    // {

    //     $validated = $request->validated();
    //     dd($validated);
        
    //     // Invoice::create($validated);

    //     return $this->index();
    // }
}
