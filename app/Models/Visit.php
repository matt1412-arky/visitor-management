<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_appointment',
        'checkin',
        'checkout',
    ];

    protected $with = [
        'appointment'
    ];

    // Definisikan relasi dengan model Appointment
    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'id_appointment');
    }
}
