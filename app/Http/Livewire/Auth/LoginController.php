<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginController extends Component
{
    public $email, $password;

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
        if (Auth::guard('web')->attempt($user, false)) {

            // $check_user = User::where('email', $this->email)->first();
            // if ($check_user->role == '') {
            //     return;
            // }
            return to_route('home.dashboard-page');
        }
    }
    public function render()
    {
        return view('livewire.auth.login-controller');
    }
}
