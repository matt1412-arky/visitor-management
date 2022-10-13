<?php

namespace App\Http\Livewire\Generate;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
// use App\Models\User;
use App\Models\Link;
use App\Models\Visitor;

class GenerateLinkController extends Component
{
    public $link_visitor, $email_generate, $password_generate;
    public $number_of_visitors = 1;
    public $user_generate;
    public function render()
    {
        return view('livewire.generate.generate-link-controller', [
            'user_generates' => $this->user_generate
        ]);
    }
    // berapa orang, waktu,
    public function generateLinkVisitor() // hanya satu kali diakses (24jam)
    {
        $counter = intval($this->number_of_visitors);
        if ($counter < 1 or null) return;
        // number of visitor is valid
        $this->user_generate = $this->generateNumberOfvisitors($counter);
        $this->dispatchBrowserEvent('generate-link', []);
    }

    private function generateNumberOfvisitors(int $count): array  | \Exception | none
    {
        try {
            $input_name = 'ersalomo';
            $this->email_generate = $input_name . random_int(1, 99) . '@gmail.com';
            // $this->password_generate = Str::random(8);
            $this->password_generate = '12345678';
            $generate_users = [];
            if ($count == 1) {
                $user_visitor =  Visitor::create([
                    'name' => 'dummy name',
                    'email' => $this->email_generate,
                    'role_id' => 6,
                    'password' => Hash::make($this->password_generate, []),
                ]);
                $link = Link::create([
                    'id_karyawan' => auth('karyawan_gaa')->id(), //id karyawan yang generate
                    'id_visitor' => $user_visitor->id,
                    'token' => Str::random(64),
                ]);
                $this->link_visitor = url('h/registrasi/' . $link->id_karyawan . '/' . $link->token);
                array_push($generate_users, [$user_visitor->email, $this->password_generate, $this->link_visitor]);
            } else {
                foreach (range(1, $count) as $counter) {
                    $user_visitor =  Visitor::create([
                        'name' => 'ersalomo' . $counter,
                        'email' => 'ersalomo' . $counter . random_int(1, 99) . '@gmail.com',
                        'role_id' => 6,
                        'password' => Hash::make($this->password_generate, []),
                    ]);
                    $link = Link::create([
                        'id_karyawan' => auth('karyawan_gaa')->id(), //id karyawan yang generate
                        'id_visitor' => $user_visitor->id,
                        'token' => Str::random(64),
                    ]);
                    $this->link_visitor = url('h/registrasi/' . $link->id_karyawan . '/' . $link->token);
                    array_push($generate_users, [$user_visitor->email, $this->password_generate, $this->link_visitor]);
                }
            }
            return $generate_users;
        } catch (\Exception $err) {
            session()->flash('error', "There was an error when generating data for user $err");
        }
    }
}
