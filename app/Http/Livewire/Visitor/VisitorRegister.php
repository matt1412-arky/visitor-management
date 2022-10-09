<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\VisitorRegis;

class VisitorRegister extends Component
{
    public $fullname,
        $phone,
        $visitation_purpose,
        $invitation_from,
        $transportation_used,
        $file_doc = '',
        $picture = '';

    protected $rules = [
        'fullname' => 'required|alpha',
        'phone' => 'string|required',
        'invitation_from' => 'string|required',
        'visitation_purpose' => 'string|required',
        'transportation_used' => 'string|required',
        'file_doc' => 'nullable',
        'picture' => 'file|nullable',
    ];
    public function mount()
    {
        $this->invitation_from = \App\Models\User::find(request()->id)['name'];;
    }

    public function render()
    {
        return view('livewire.visitor.visitor-register', []);
    }
    public function register()
    {
        $this->validate();
        $visitor =  VisitorRegis::create([
            'link_visitor_id' => '',
            'fullname' => $this->fullname,
            'phone' => $this->phone,
            'invitation_from' => $this->invitation_from,
            'visitation_purpose' => $this->visitation_purpose,
            'transportation_used' => $this->transportation_used,
            'file_doc' => $this->file_doc,
            'picture' => $this->picture,
        ]);
        $this->reset();
        if ($visitor) {
            session()->flash('success', 'Your data has been saved');
        } else {
            session()->flash('error', 'Your data has been saved');
        }
    }

}

// how to createtable users?   
