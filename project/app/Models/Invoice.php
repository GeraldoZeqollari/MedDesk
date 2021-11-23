<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'invoice_address',
        'f_name',
        'l_name',
        'invoice_email',
        'f_code',
        'indirizzo',
        'citta',
        'postal_code',
        'provinzia',
        'nazione'

    ];
}
