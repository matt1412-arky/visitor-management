<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\KaryawanGA;

class CreateAppointmentController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'phone' => 'required|max:15',
            'invitation_from' => 'required',
            'visitation_purpose' => 'required',
            'visit_date' => 'required',
            'arrival_time' => 'required',
        ]);

        $appointment = Appointment::create([
            'name' => auth()->user()->name,
            'phone' => $request->input('phone'),
            'invitation_from' => $request->input('invitation_from'),
            'visitation_purpose' => $request->input('visitation_purpose'),
            'visit_date' => $request->input('visit_date'),
            'arrival_time' => $request->input('arrival_time'),
            'id_visitor' => auth()->user()->id,
        ]);

        $karyawan = KaryawanGA::where('name', '<>', 'admin')->get();

        return redirect()->route('home.visiting-appointments', compact('karyawan'))->with('success', 'Appointment created successfully');
    }
}
