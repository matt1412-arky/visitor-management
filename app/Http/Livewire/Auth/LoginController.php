<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


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
            'password' => 'required',
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        $user = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        try {
            if (Auth::guard('karyawan_gaa')->attempt($user, $this->remember)) {
                return redirect()->to(route('home.dashboard-page'));
            } elseif (Auth::guard('visitor')->attempt($user, $this->remember)) {
                $visitor = Auth::guard('visitor')->user();

                if ($visitor->is_active) {
                    if ($this->returnUrl != null) {
                        return redirect()->to($this->returnUrl);
                    }

                    return redirect()->to(route('home.dashboard-visitor'));
                } else {
                    Session::flash('fail', 'Your account is inactive. Please contact the administrator to reactivate your account.');
                    Auth::guard('visitor')->logout();
                }
            } else {
                Session::flash('fail', "These credentials don't match our records.");
            }
        } catch (\Exception $e) {
            Session::flash('error', 'There was an error while logging in. Please try again.');
        }
    }


    public function render()
    {
        return view('livewire.auth.login-controller');
    }
}
