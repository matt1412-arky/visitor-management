<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_karyawan',
        'id_visitor',
        'checkin',
        'checkout',
    ];
    protected $with = [
        'karyawan',
        'visitor'
    ];

    // Definisikan relasi dengan model KaryawanGa
    public function karyawan()
    {
        return $this->belongsTo(KaryawanGa::class, 'id_karyawan');
    }

    // Definisikan relasi dengan model Visitor
    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'id_visitor');
    }
}
