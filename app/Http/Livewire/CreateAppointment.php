<?php

namespace App\Http\Livewire;

use App\Models\Visit;
use App\Models\KaryawanGA;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAppointment extends Component
{
    public $phone;
    public $invitation_from;
    public $visitation_purpose;
    public $visit_date;
    public $arrival_time;

    protected $rules = [
        'phone' => 'required|max:15',
        'invitation_from' => 'required',
        'visitation_purpose' => 'required',
        'visit_date' => 'required',
        'arrival_time' => 'required',
    ];

    public function render()
    {
        $karyawan = KaryawanGA::where('name', '!=', 'admin')->get();
        return view('livewire.appointment', compact('karyawan'));
    }

    public function createAppointment()
    {
        $this->validate();

        Visit::create([
            'name' => Auth::user()->name,
            'phone' => $this->phone,
            'invitation_from' => $this->invitation_from,
            'visitation_purpose' => $this->visitation_purpose,
            'visit_date' => $this->visit_date,
            'arrival_time' => $this->arrival_time,
            'id_visitor' => Auth::id(),
            'checkin' => 'pending', // Set default value to "pending"
            'checkout' => 'pending', // Set default value to "pending"
        ]);

        session()->flash('success', 'Appointment created successfully.');
        session()->flash('fail', 'Failed to create appointment. Please check the form fields.');

        return redirect()->route('home.visiting-appointments');
    }
}
