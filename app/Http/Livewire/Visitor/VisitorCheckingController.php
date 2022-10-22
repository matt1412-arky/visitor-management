<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\RegistrationVisitor;
use Livewire\WithPagination;

class VisitorCheckingController extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $paginator;
    public function render()
    {
        $visitors = null;
        if ($this->search) {
            $visitors = RegistrationVisitor
                ::whereHas(
                    'visitor',
                    function ($query) {
                        $query->where('name', 'LIKE', "%" . $this->search . "%");
                    }
                )->orWhereHas(
                    'karyawan_ga',
                    function ($query) {
                        $query->where('name', 'LIKE', "%" . $this->search . "%");
                    }
                )->paginate($this->paginator);
        } else {
            $visitors =  RegistrationVisitor::with(['visitor', 'karyawan_ga'])->paginate($this->paginator);
        }
        return view('livewire.visitor.visitor-checking-controller', [
            'visitors' => $visitors
        ]);
    }
}
