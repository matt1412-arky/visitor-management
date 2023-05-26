<?php

namespace App\Http\Livewire;

use App\Models\KaryawanGA;
use Livewire\Component;

class EditEmployeeModal extends Component
{
    public $karyawan_ga;

    protected $listeners = [
        'openEditEmployee' => 'openModal',
    ];

    public function openModal($karyawanId)
    {
        $this->karyawan_ga = KaryawanGA::findOrFail($karyawanId);

        $this->dispatchBrowserEvent('openEditEmployee', []);
    }

    public function editEmployee()
    {
        $this->validate([
            'karyawan_ga.name' => ['required', 'string', 'max:100', 'min:3', 'regex:/^[\pL\s\-]+$/u'],
            'karyawan_ga.email' => ['required', 'email'],
            'karyawan_ga.devisi' => ['required', 'string'],
            'karyawan_ga.jabatan' => ['required', 'string'],
        ]);

        // Periksa apakah ada karyawan lain dengan alamat email yang sama
        $existingKaryawan = KaryawanGA::where('email', $this->karyawan_ga->email)
            ->where('id', '<>', $this->karyawan_ga->id)
            ->exists();

        if ($existingKaryawan) {
            $this->addError('karyawan_ga.email', 'Email address is already taken.');
            return;
        }

        $this->karyawan_ga->save();

        $this->dispatchBrowserEvent('closeEditEmployee');
    }


    public function render()
    {
        return view('livewire.edit-employee-modal');
    }
}
