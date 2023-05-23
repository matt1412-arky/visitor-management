<?php

namespace App\Http\Livewire;

use App\Models\Visitor;
use Livewire\Component;

class EditVisitorModal extends Component
{
    public $visitorId;
    public $name;
    public $email;
    public $phone;

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

        $this->dispatchBrowserEvent('openEditVisitor');
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
        ]);

        $visitor = Visitor::findOrFail($this->visitorId);
        $visitor->name = $this->name;
        $visitor->email = $this->email;
        $visitor->phone = $this->phone;
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
