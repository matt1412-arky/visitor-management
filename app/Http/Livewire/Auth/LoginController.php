<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginController extends Component
{
    public $email, $password;
    public $returnUrl;
    public function mount()
    {
        $this->returnUrl = request()->returnUrl;
    }
    public function loginHandler()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);
        $user = [
            'email' => $this->email,
            'password' => $this->password
        ];
        try {
            if (Auth::guard('karyawan_gaa')->attempt($user)) {
                return to_route('home.dashboard-page');
            }
            if (Auth::guard('visitor')->attempt($user)) {
                if ($this->returnUrl != null) {
                    return redirect()->to($this->returnUrl);
                } else {
                    return to_route('home.dashboard-page');
                }
            }
        } catch (\Exception $e) {
            session()->flash('error', 'There was an error while logging in. Please try again');
        }
    }
    public function render()
    {
        return view('livewire.auth.login-controller');
    }
}
