<?php

namespace App\Http\Livewire\Generate;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GenerateLinkController extends Component
{
    public $link_visitor, $email_generate, $password_generate;
    public $number_of_visitors;
    public function render()
    {
        return view('livewire.generate.generate-link-controller');
    }
    // berapa orang, waktu,
    public function generateLinkVisitor() // hanya satu kali diakses (24jam)
    {
        $input_name = 'ersalomo';
        $this->email_generate = $input_name . random_int(1, 99) . '@gmail.com';
        $this->password_generate = Str::random(8);
        // $user_generator = User::create([
        //     'name' => $input_name,
        //     'email' => $this->email_generate,
        //     'role' => 'visitor',
        //     'password' => Hash::make($this->password_generate, []),
        // ]);
        $token = Str::random(64);

        $url_visitor = url('h/registrasi/' . auth('web')->id() . $token);
        dd([
            $this->email_generate,
            $this->password_generate,
            $url_visitor
        ]);
    }
}
