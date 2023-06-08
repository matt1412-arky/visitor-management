<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorAccount extends Component
{
    public $visitor;
    public $search = '';
    public $paginator = 10;
    protected $paginationTheme = 'bootstrap';
    public $editVisitorId;
    public $name;
    public $email;
    public $phone;
    public $invitation_from;
    public $visitation_purpose;
    public $visit_date;
    public $arrival_time;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'invitation_from' => 'required',
        'visitation_purpose' => 'required',
        'visit_date' => 'required|date',
        'arrival_time' => 'required|date_format:H:i',
    ];

    public function openModalDialog($visitorId)
    {
        $visitor = Visitor::findOrFail($visitorId);

        $this->editVisitorId = $visitorId;
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
        $this->validate();

        $visitor = Visitor::findOrFail($this->editVisitorId);
        $visitor->name = $this->name;
        $visitor->email = $this->email;
        $visitor->phone = $this->phone;
        $visitor->invitation_from = $this->invitation_from;
        $visitor->visitation_purpose = $this->visitation_purpose;
        $visitor->visit_date = $this->visit_date;
        $visitor->arrival_time = $this->arrival_time;
        $visitor->save();

        $this->dispatchBrowserEvent('swal:update', [
            'title' => 'Update Success',
            'type' => 'success',
            'text' => 'Data has been successfully updated.'
        ]);

        $this->dispatchBrowserEvent('closeEditVisitor');
    }

    public function closeModal()
    {
        $this->dispatchBrowserEvent('closeEditVisitor');
    }

    public function render()
    {
        if ($this->search) {
            $visitors = Visitor::query()
                ->where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('phone', 'LIKE', "%{$this->search}%")
                ->orWhere('email', 'LIKE', "%{$this->search}%")
                ->paginate($this->paginator);
        } else {
            $visitors = Visitor::orderBy('id')->paginate($this->paginator);
        }

        return view('livewire.visitor-account', [
            'visitors' => $visitors
        ]);
    }

    public function activate($visitorId)
    {
        $visitor = Visitor::find($visitorId);
        if ($visitor) {
            $visitor->is_active = 1;
            $visitor->save();

            $this->dispatchBrowserEvent('swal:alert', [
                'type' => 'success',
                'title' => 'Success',
                'msg' => 'Visitor has been activated.',
            ]);
        }
    }

    public function deactivate($visitorId)
    {
        $visitor = Visitor::find($visitorId);
        if ($visitor) {
            $visitor->is_active = 0;
            $visitor->save();

            $this->dispatchBrowserEvent('swal:alert', [
                'type' => 'success',
                'title' => 'Success',
                'msg' => 'Visitor has been deactivated.',
            ]);
        }
    }
}
