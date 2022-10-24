<?php

namespace App\Http\Livewire\Generate;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Link;
use App\Models\Visitor;
use Illuminate\Support\Facades\URL;

class GenerateLinkController extends Component
{
    public $link_visitor, $email_generate, $password_generate;
    public $number_of_visitors = 0;
    public $user_generate;
    public function render()
    {
        return view('livewire.generate.generate-link-controller', [
            'user_generates' => $this->user_generate
        ]);
    }
    public function generateLinkVisitor() // hanya satu kali diakses (24jam)
    {
        $counter = intval($this->number_of_visitors);
        if ($counter < 1 or null) {
            session()->flash('fail', 'Number of visitor cant less than 1');
            return;
        };
        $this->user_generate = $this->generateNumberOfvisitors($counter);
        $this->dispatchBrowserEvent('generate-link', []);
    }

    private function generateNumberOfvisitors(int $count): array  | \Exception
    {
        try {
            $generate_users = [];
            $input_name = 'ersalomo';
            $this->email_generate = $input_name . random_int(1, 99) . '@gmail.com';
            $this->password_generate = '12345678';
            if ($count == 1) {
                $user_visitor =  Visitor::create([
                    'name' => fake()->name(),
                    'email' => $this->email_generate,
                    'role_id' => 6,
                    'password' => bcrypt($this->password_generate, []),
                ]);
                $link = Link::create([
                    'id_karyawan' => auth('karyawan_gaa')->id(),
                    'id_visitor' => $user_visitor->id,
                    'token' => Str::random(64),
                    'expires_at' => now()->addDay(),
                ]);
                // $url_tempo = URL::temporarySignedRoute('home.registrasi', $link->expires_at, [$link->id_visitor, $link->token]);
                $url_tempo = URL::signedRoute('home.registrasi',  [$link->id_visitor, $link->token], $link->expires_at);
                // $this->link_visitor = url('h/registrasi/' . $user_visitor->id . '/' . $link->token);
                // array_push($generate_users, [$user_visitor->email, $this->password_generate, $this->link_visitor]);
                array_push($generate_users, [$user_visitor->email, $this->password_generate, $url_tempo]);
                return $generate_users;
            } else {
                foreach (range(1, $count) as $counter) {
                    $user_visitor =  Visitor::create([
                        'name' => 'ersalomo' . $counter,
                        'email' => 'ersalomo' . $counter . random_int(1, 99) . '@gmail.com',
                        'role_id' => 6,
                        'password' => bcrypt($this->password_generate, []),
                    ]);
                    $link = Link::create([
                        'id_karyawan' => auth('karyawan_gaa')->id(), //id karyawan yang generate
                        'id_visitor' => $user_visitor->id,
                        'token' => Str::random(64),
                        'expires_at' => now()->addDay(),
                    ]);
                    // $this->link_visitor = url('h/registrasi/' . $user_visitor->id . '/' . $link->token);
                    $url_tempo = URL::temporarySignedRoute('home.registrasi', $link->expires_at, [$link->id_visitor, $link->token]);
                    array_push($generate_users, [$user_visitor->email, $this->password_generate, $url_tempo]);
                }
            }
            return $generate_users;
        } catch (\Exception $err) {
            session()->flash('error', "There was an error when generating data for user $err");
        }
    }
}
