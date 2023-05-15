<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationVisitor extends Model
{
    use HasFactory;
    protected $table = 'registration_visitors';
    protected $fillable = [
        'id_karyawan',
        'id_visitor',
        'status',
        'checkout'
    ];
    protected $with = [
        'visitor',
        'karyawan_ga'
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'id_visitor');
    }
    public function karyawan_ga()
    {
        return $this->belongsTo(KaryawanGA::class, 'id_karyawan');
    }

    public function createdAt(): Attribute
    {
        return new Attribute(
            get: fn ($value) => \Carbon\Carbon::parse($value)->format('l j F Y'),
        );
    }
    public function checkout(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value == '' ? 'pending' : $value,
        );
    }
}
