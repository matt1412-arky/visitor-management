<?php

namespace App\Http\Livewire;

use App\Models\Visitor;
use Livewire\Component;
use Carbon\Carbon;

class EditVisitorModal extends Component
{
    public $visitorId;
    public $name;
    public $email;
    public $phone;
    public $invitation_from;
    public $visitation_purpose;
    public $visit_date;
    public $arrival_time;

    protected $listeners = [
        'openEditVisitor' => 'openModalDialog',
    ];

    public function openModalDialog($visitorId)
    {
        $this->resetValidation();
        $this->visitorId = $visitorId;
        $visitor = Visitor::findOrFail($visitorId);
        $this->name = $visitor->name;
        $this->email = $visitor->email;
        $this->phone = $visitor->phone;
        $this->invitation_from = $visitor->invitation_from;
        $this->visitation_purpose = $visitor->visitation_purpose;
        $this->visit_date = $visitor->visit_date ? Carbon::parse($visitor->visit_date)->format('Y-m-d') : null;
        $this->arrival_time = $visitor->arrival_time ? Carbon::parse($visitor->arrival_time)->format('H:i') : null;


        $this->dispatchBrowserEvent('openEditVisitor');
    }


    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'invitation_from' => ['required', 'string'],
            'visitation_purpose' => ['required', 'string'],
            'visit_date' => ['required', 'date'],
            'arrival_time' => ['required', 'date_format:H:i'],
        ]);

        $visitor = Visitor::findOrFail($this->visitorId);
        $visitor->name = $this->name;
        $visitor->email = $this->email;
        $visitor->phone = $this->phone;
        $visitor->invitation_from = $this->invitation_from;
        $visitor->visitation_purpose = $this->visitation_purpose;
        $visitor->visit_date = $this->visit_date;
        $visitor->arrival_time = $this->arrival_time;
        $visitor->save();

        $this->dispatchBrowserEvent('closeEditVisitor');
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeEditVisitor');
    }

    public function render()
    {
        return view('livewire.edit-visitor-modal');
    }
}
