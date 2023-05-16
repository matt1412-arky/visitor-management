<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithFileUploads};
use App\Models\{Visitor};
use Illuminate\Support\Str;
use App\Trait\{AlertTrait};

class VisitorRegister extends Component
{
    use WithFileUploads;
    use AlertTrait;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $invitation_from;
    public $visitation_purpose;
    public $waktu_kunjungan;

    public function render()
    {
        return view('livewire.visitor-register');
    }
    public function register()
    {
        $visitor = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:visitors,email',
            'password' => 'required|string',
            'phone' => 'required|unique:visitors,phone',
            'invitation_from' => 'required|string',
            'visitation_purpose' => 'required|string',
            'waktu_kunjungan' => 'required',
        ]);
        $visitor['role_id'] = 4;
        $visitor['password'] = bcrypt($visitor['password']);
        Visitor::create($visitor);
        $this->reset();
        $this->showToastr('success', 'success', 'Data berhasil ditambahkan');
        return to_route('auth.login');
    }
}
