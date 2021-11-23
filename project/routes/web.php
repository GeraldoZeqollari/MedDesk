<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalFormController;
use App\Models\Invoice;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [MedicalFormController::class, 'index']);
// Route::post('/', [MedicalFormController::class, 'store']);

// Route::post('/', [InvoiceController::class, 'store']);

Route::resource('/', MedicalFormController::class);

// Route::resource('/', InvoiceController::class);
