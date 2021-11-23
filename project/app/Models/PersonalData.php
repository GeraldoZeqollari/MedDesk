<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'cellphone',
        'nationality',
        'fiscal_code',
        'date_of_birth',
        'gender',
        'municipality',
        'zip_code',
        'address',
        'terms_conditions',
        'personal_data'

    ];
}
