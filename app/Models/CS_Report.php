<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CS_Report extends Model
{
    use HasFactory;

    protected $table = 'c_s__reports';

    protected $fillable = [
        'nik_cs',
        'location',
        'picture'
    ];

    // protected function picture(): Attribute
    // {
    //     return new Attribute(
    //     );
    // }
}
