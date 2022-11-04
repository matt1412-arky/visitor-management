<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginController extends Component
{
    public $email, $password, $remember;
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
            if (Auth::guard('karyawan_gaa')->attempt($user, $this->remember)) {
                return to_route('home.dashboard-page');
            } elseif (Auth::guard('visitor')->attempt($user, $this->remember)) {
                if ($this->returnUrl != null) {
                    return redirect()->to($this->returnUrl);
                } else {
                    return to_route('home.dashboard-page');
                }
            }
            session()->flash('fail', "This credential does'nt match to our records");
        } catch (\Exception $e) {
            session()->flash('error', "There was an error while logging in. Please try again");
        };
    }
    public function render()
    {
        return view('livewire.auth.login-controller');
    }
}
