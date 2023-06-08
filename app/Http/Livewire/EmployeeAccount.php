<?php

namespace App\Http\Livewire;

use App\Models\KaryawanGA;
use App\Models\Role;
use Livewire\Component;

class EmployeeAccount extends Component
{
    public KaryawanGA $karyawan_ga;
    public $search = '';
    public $paginator = 10;
    protected $paginationTheme = 'bootstrap';

    protected $rules = [
        'karyawan_ga.name' => ['required', 'string', 'max:100', 'min:3', 'regex:/^[\pL\s\-]+$/u'],
        'karyawan_ga.email' => ['required', 'email', 'unique:karyawan_ga'],
        'karyawan_ga.devisi' => ['required', 'string'],
        'karyawan_ga.jabatan' => ['required', 'string'],
        'karyawan_ga.password' => ['nullable', 'string'],
        'karyawan_ga.role_id' => ['required', 'integer', 'digits_between:1,10']
    ];

    protected $messages = [
        'karyawan_ga.*.required' => 'Fill this field with the required data',
        'karyawan_ga.name.string' => 'Fill this field',
        'karyawan_ga.email.email' => 'Fill this field with a valid email',
        'karyawan_ga.devisi.*' => 'Fill this field',
        'karyawan_ga.jabatan.*' => 'Fill this field',
        'karyawan_ga.password.*' => 'Fill this field',
        'karyawan_ga.role_id.*' => 'Fill this field'
    ];

    public function openModalDialog()
    {
        $this->clearField();
        $this->dispatchBrowserEvent('openAddEmployee', []);
    }

    public function mount(KaryawanGA $karyawan_ga)
    {
        $this->karyawan_ga = $karyawan_ga;
    }

    public function createNewEmployee()
    {
        $this->validate();

        $this->karyawan_ga->password = '12345678';
        $this->karyawan_ga->save();

        $this->clearField();

        $this->dispatchBrowserEvent('createNewEmployee', [
            'title' => 'Create User Account Successfully',
            'type' => 'success',
            'message' => 'Successfully created an account'
        ]);

        $this->search = '';
    }

    public function openModal($karyawanId)
    {
        $this->karyawan_ga = KaryawanGA::findOrFail($karyawanId);

        $roles = Role::whereIn('role_name', ['employee', 'security', 'superadmin'])->get();

        $this->dispatchBrowserEvent('openEditEmployee', [
            'karyawan' => $this->karyawan_ga,
            'roles' => $roles,
        ]);
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

        $this->dispatchBrowserEvent('swal:edit', [
            'title' => 'Update Success',
            'type' => 'success',
            'text' => 'Data has been successfully updated.'
        ]);
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeEditEmployee');
    }

    public function delete($id)
    {
        KaryawanGA::destroy($id);

        $this->dispatchBrowserEvent('swal:delete', [
            'title' => 'Delete Success',
            'type' => 'success',
            'msg' => 'Successfully deleted an account',
        ]);
    }

    public function render()
    {
        $employees = KaryawanGA::orderBy('id')->paginate($this->paginator);

        if ($this->search) {
            $employees = KaryawanGA::where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                ->orderBy('id')
                ->paginate($this->paginator);
        }

        $roles = Role::whereIn('role_name', ['employee', 'security', 'superadmin'])->get();

        return view('livewire.employee-account', [
            'employees' => $employees,
            'roles' => $roles,
        ])->extends('layout.apps');
    }

    private function clearField()
    {
        $this->karyawan_ga->name = '';
        $this->karyawan_ga->email = '';
        $this->karyawan_ga->devisi = '';
        $this->karyawan_ga->jabatan = '';
        $this->karyawan_ga->password = '';
        $this->karyawan_ga->role_id = '';
    }
}
