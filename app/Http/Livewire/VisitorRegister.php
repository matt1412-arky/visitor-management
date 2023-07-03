<?php

namespace App\Http\Livewire;

use Livewire\{Component};
use App\Models\{Visitor};
use Illuminate\Support\Str;
use App\Trait\{AlertTrait};

class VisitorRegister extends Component
{
    use AlertTrait;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $invitation_from;
    public $visitation_purpose;
    public $visit_date;
    public $arrival_time;

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
            'phone' => 'required',
            'invitation_from' => 'required|string',
            'visitation_purpose' => 'required|string',
            'visit_date' => 'required|date',
            'arrival_time' => 'required',
        ]);

        $visitor['role_id'] = 4;
        $visitor['password'] = bcrypt($visitor['password']);

        Visitor::create($visitor);

        $this->reset();
        $this->showToastr('success', 'success', 'Data berhasil ditambahkan');

        return redirect()->route('auth.login');
    }
}
