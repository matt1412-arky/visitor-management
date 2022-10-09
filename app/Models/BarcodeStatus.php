<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarcodeStatus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with = [
        'visitor_register'
    ];
    public function visitor_register()
    {
        $this->belongsTo(VisitorRegis::class, 'id_regis_visitor');
    }
}
