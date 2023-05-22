<?php

namespace App\Http\Livewire;

// VisitorAccount.php

use Livewire\Component;
use App\Models\Visitor;

class VisitorAccount extends Component
{
    public Visitors $visitor;
    public $search = '';
    public $paginator = 10;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $visitor = Visitor::orderBy('id')->paginate($this->paginator);

        if ($this->search) {
            $visitor = Visitors::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('phone', 'like', '%' . $this->search . '%')
                ->orderBy('id')
                ->paginate($this->paginator);
        }


        return view('livewire.visitor-account', [
            'visitors' => $visitor
        ]);
    }

    public function delete($id)
    {

        Visitors::destroy($id);

        $this->dispatchBrowserEvent('swal:delete', [
            'title' => 'Are you sure you want to delete this data?',
            'type' => 'warning',
            'msg' => 'Successfully deleted an account',
        ]);
    }
}
