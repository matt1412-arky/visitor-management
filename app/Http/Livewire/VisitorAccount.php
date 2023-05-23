<?php

namespace App\Http\Livewire;

// VisitorAccount.php

use Livewire\Component;
use App\Models\Visitor;

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

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    public function openModalDialog($visitorId)
    {
        $visitor = Visitor::findOrFail($visitorId);

        $this->editVisitorId = $visitorId;
        $this->name = $visitor->name;
        $this->email = $visitor->email;
        $this->phone = $visitor->phone;

        $this->dispatchBrowserEvent('openEditVisitor');
    }
    public function update()
    {
        $this->validate();

        $visitor = Visitor::findOrFail($this->editVisitorId);
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
        if ($this->search) {
            $visitors = Visitor::query()
                ->where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('phone', 'LIKE', "%{$this->search}%")
                ->orWhere('email', 'LIKE', "%{$this->search}%")
                ->get();
        } else {
            $visitors = Visitor::orderBy('id')->paginate($this->paginator);
        }

        return view('livewire.visitor-account', [
            'visitors' => $visitors
        ]);
    }
    public function delete($id)
    {
        Visitor::destroy($id);

        $this->dispatchBrowserEvent('swal:delete', [
            'title' => 'Are you sure you want to delete this data?',
            'type' => 'warning',
            'msg' => 'Successfully deleted an account',
        ]);
    }
}
