<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = "appointment";

    protected $fillable = [
        'name',
        'phone',
        'invitation_from',
        'visitation_purpose',
        'visit_date',
        'arrival_time',
        'id_visitor',
    ];

    protected $hidden = [
        'id_visitor'
    ];
    protected $appends = [
        'id_visitor'
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'id_visitor');
    }
}
