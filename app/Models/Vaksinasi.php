<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksinasi extends Model
{
    use HasFactory;
    protected $table = 'vaksinasis';

    protected $fillable = [
        'id_visitor',
        'vaksin_pertama',
        'vaksin_kedua',
        'vaksin_ketiga',
        'vaksin_keempat'
    ];
}
