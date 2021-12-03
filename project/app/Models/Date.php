<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $dates = ['date'];

    protected $fillable = [
        'date'
    ];
    // public function oraris()
    // {
    //     return $this->hasMany('App\Orari', 'orari_id');
    // }
}
