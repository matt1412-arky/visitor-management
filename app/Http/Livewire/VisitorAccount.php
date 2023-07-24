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

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function openModalDialog($visitorId)
    {
        $visitor = Visitor::findOrFail($visitorId);

        $this->editVisitorId = $visitorId;
        $this->name = $visitor->name;
        $this->email = $visitor->email;

        $this->dispatchBrowserEvent('openEditVisitor');
    }

    public function update()
    {
        $this->validate();

        $visitor = Visitor::findOrFail($this->editVisitorId);
        $visitor->name = $this->name;
        $visitor->email = $this->email;

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
