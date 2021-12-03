<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orari extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $dates = ['orari'];
    

    protected $fillable = [
        'orari'
    ];
   
}
