<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
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

        // Fetch the KaryawanGA model based on the 'invitation_from' input field (name)
        $karyawan = KaryawanGA::where('name', $request->input('invitation_from'))->first();

        if (!$karyawan) {
            // Handle the case when the 'invitation_from' value does not match any KaryawanGA record
            return back()->with('error', 'Invalid Karyawan');
        }

        // Create a new Visit record and assign 'id_karyawan' based on the fetched KaryawanGA model
        $visit = Visit::create([
            'name' => auth()->user()->name,
            'phone' => $request->input('phone'),
            'invitation_from' => $request->input('invitation_from'),
            'visitation_purpose' => $request->input('visitation_purpose'),
            'visit_date' => $request->input('visit_date'),
            'arrival_time' => $request->input('arrival_time'),
            'id_visitor' => auth()->user()->id,
            'id_karyawan' => $karyawan->id, // Assign 'id_karyawan' based on the fetched KaryawanGA model
            'checkin' => 'pending',
            'checkout' => 'pending',
        ]);

        return redirect()->route('home.visiting-appointments')->with('success', 'Appointment created successfully');
        return redirect()->route('home.visiting-appointments')->with('fail', 'Failed to create appointment. Please check the form fields.');
    }
}
