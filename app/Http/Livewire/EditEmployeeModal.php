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

        $this->karyawan_ga->save();

        $this->dispatchBrowserEvent('closeEditEmployee');
    }

    public function render()
    {
        return view('livewire.edit-employee-modal');
    }
}
