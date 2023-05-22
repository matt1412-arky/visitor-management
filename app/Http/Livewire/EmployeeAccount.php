<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\{KaryawanGA, Role};
use Illuminate\Http\Request;


class EmployeeAccount extends Component
{
    use WithPagination;
    public KaryawanGA $karyawan_ga;
    public $search = '', $paginator = 10;
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
        'karyawan_ga.name.string' => 'Fill this filed',
        'karyawan_ga.email.email' => 'Fill this field with the email',
        'karyawan_ga.devisi.*' => 'Fill this filed',
        'karyawan_ga.jabatan.*' => 'Fill this filed',
        'karyawan_ga.password.*' => 'Fill this filed',
        'karyawan_ga.role_id.*' => 'Fill this filed'

    ];

    public function openModalDialog()
    {
        $this->clearField();
        return $this->dispatchBrowserEvent('openAddEmployee', []);
    }
    public function mount()
    {
        $this->karyawan_ga = $karyawan_ga ?? new KaryawanGA();
    }
    public function createNewEmployee()
    {
        $data = $this->validate();
        $data['karyawan_ga']['password'] = '12345678';
        $this->karyawan_ga->create($data['karyawan_ga']);
        KaryawanGA::destroy($this->karyawan_ga->name);
        $this->clearField();
        return $this->dispatchBrowserEvent('createNewEmployee', [
            'title' => 'Create User Account Successfully',
            'type' => 'success',
            'message' => 'Successfully created an account'
        ]);
    }
    public function delete($id)
    {
        KaryawanGA::destroy($id);

        $this->dispatchBrowserEvent('swal:delete', [
            'title' => 'Are you sure you want to delete this data?',
            'type' => 'warning',
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

        return view('livewire.employee-account', [
            'employees' => $employees,
            'roles' => Role::whereIn('role_name', ['employee', 'security', 'superadmin'])->get(),
        ])->extends('layout.apps');
    }

    private function clearField(): void
    {
        $this->karyawan_ga->name = '';
        $this->karyawan_ga->email = '';
        $this->karyawan_ga->devisi = '';
        $this->karyawan_ga->jabatan = '';
        $this->karyawan_ga->password = '';
        $this->karyawan_ga->role_id = '';
    }
}
