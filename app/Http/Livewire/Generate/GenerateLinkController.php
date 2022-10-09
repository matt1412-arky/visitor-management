<?php

namespace App\Http\Livewire\Generate;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\LinkVisitor;
use App\Models\VisitorRegis;

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
        // $regis = VisitorRegis::all();
        // dd($regis[0]->link_visitor->user->name);
        // $links = LinkVisitor::get();
        // dd($links[0]->user->name);
        $counter = intval($this->number_of_visitors);
        if ($counter < 1 or null) return;
        // number of visitor is valid
        $input_name = 'ersalomo';
        $this->email_generate = $input_name . random_int(1, 99) . '@gmail.com';
        $this->password_generate = Str::random(8);
        $this->user_generate = $this->generateNumberOfvisitors($counter) or function () {
            session()->flash('error', 'ada masalah dengan system kami');
            return;
        };
        $this->dispatchBrowserEvent('generate-link', []);
    }

    private function generateNumberOfvisitors(int $count): array | User
    {
        $generate_users = [];
        try {
            if ($count == 1) {
                $user_generator =  auth('web')->user()->create([
                    'name' => 'dummy name',
                    'email' => $this->email_generate,
                    'role' => 'visitor',
                    'password' => Hash::make($this->password_generate, []),
                ]);
                $link_visitor = LinkVisitor::create([
                    'user_id' => auth('web')->id(), //id karyawan yang generate
                    'token' => Str::random(64),
                    'status' => 'sent',
                ]);
                $this->link_visitor = url('h/registrasi/' . auth('web')->id() . '/' . $link_visitor->token);
                array_push($generate_users, [$user_generator->email, $this->password_generate, $this->link_visitor]);
            } else {
                foreach (range(1, $count) as $counter) {
                    $user_generator =  auth('web')->user()->create([
                        'name' => 'ersalomo' . $counter,
                        'email' => 'ersalomo' . $counter . random_int(1, 99) . '@gmail.com',
                        'role' => 'visitor',
                        'password' => Hash::make($this->password_generate, []),
                    ]);
                    $link_visitor = LinkVisitor::create([
                        // 'user_id' => auth('web')->id(), // pending
                        'user_id' => $user_generator['id'], // pending
                        'token' => Str::random(64),
                        'status' => 'sent',
                    ]);
                    $this->link_visitor = url('h/registrasi/' . auth('web')->id() . '/' . $link_visitor->token);
                    array_push($generate_users, [$user_generator->email, $this->password_generate, $this->link_visitor]);
                }
            }
            return $generate_users;
        } catch (\Exception $err) {
            return back();
        }
    }
}
