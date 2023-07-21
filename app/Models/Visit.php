<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;
use App\Models\Visitor;
use App\Models\KaryawanGA;
use App\Models\FeedBack;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_visitor',
        'id_karyawan',
        'name',
        'phone',
        'invitation_from',
        'visitation_purpose',
        'visit_date',
        'arrival_time',
        'checkin',
        'checkout',
    ];

    protected $with = [
        'visitor',
        'karyawan',
    ];

    // Definisikan relasi dengan model Appointment
    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'id_appointment');
    }

    // Definisikan relasi dengan model Visitor
    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'id_visitor');
    }

    // Definisikan relasi dengan model KaryawanGA
    public function karyawan()
    {
        return $this->belongsTo(KaryawanGA::class, 'id_karyawan');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'id_visit');
    }
}
