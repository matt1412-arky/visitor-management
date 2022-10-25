<?php

namespace App\Http\Livewire\ManageAccount;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\KaryawanGA;
use App\Models\Role;
use Illuminate\Http\Request;


class EmployeeAccount extends Component
{
    public KaryawanGA $karyawan_ga;
    public $search = '', $paginator = 10;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $rules = [
        'karyawan_ga.NIK' => ['required', 'unique:karyawan_ga', 'numeric'],
        'karyawan_ga.name' => ['required', 'string', 'max:100', 'min:3', 'regex:/^[\pL\s\-]+$/u'],
        'karyawan_ga.email' => ['required', 'email', 'unique:karyawan_ga'],
        'karyawan_ga.devisi' => ['required', 'string'],
        'karyawan_ga.jabatan' => ['required', 'string'],
        'karyawan_ga.password' => ['nullable', 'string'],
        'karyawan_ga.role_id' => ['required', 'integer', 'digits_between:1,10']
    ];

    protected $messages = [
        'karyawan_ga.NIK.unique' => 'The value :attribute must be unique number',
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
    public function mount(KaryawanGA $karyawan_ga)
    {
        $this->karyawan_ga = $karyawan_ga ?? new KaryawanGA();
    }
    public function createNewEmployee()
    {
        $data = $this->validate();
        $data['karyawan_ga']['password'] = '12345678';
        $this->karyawan_ga->create($data['karyawan_ga']);
        KaryawanGA::destroy($this->karyawan_ga->NIK);
        $this->clearField();
        return $this->dispatchBrowserEvent('createNewEmployee', [
            'title' => 'Create User Account Successfully',
            'type' => 'success',
            'message' => 'Successfully created an account'
        ]);
    }
    public function render()
    {
        $employees = KaryawanGA::latest()->paginate($this->paginator);
        if ($this->search) {
            $employees =  KaryawanGA::where('NIK', 'LIKE', '%' . $this->search . '%')
                ->orWhere('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%')
                ->latest()->paginate($this->paginator);
        }
        return view('livewire.manage-account.employee-account', [
            'employees' => $employees,
            'roles' => Role::whereIn('id', [1, 2, 3, 4])->get()
        ]);
    }
    private function clearField(): void
    {
        $this->karyawan_ga->NIK = '';
        $this->karyawan_ga->name = '';
        $this->karyawan_ga->email = '';
        $this->karyawan_ga->devisi = '';
        $this->karyawan_ga->jabatan = '';
        $this->karyawan_ga->password = '';
        $this->karyawan_ga->role_id = '';
    }
}
