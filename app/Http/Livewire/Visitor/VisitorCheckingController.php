<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\RegistrationVisitor;
use Livewire\WithPagination;

class VisitorCheckingController extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $paginator = 5;

    public function render()
    {
        $visitors = null;
        if ($this->search) {
            $visitors = RegistrationVisitor::query()->with(['visitor' => function ($query) {
                $query->where("name", "LIKE", "%" . $this->search . "%");
            }, 'karyawan_ga' => function ($query) {
                $query->where("name", "LIKE", "%" . $this->search . "%");
            }])->paginate();
        } else {
            $visitors = RegistrationVisitor::paginate();
        }

        return view('livewire.visitor.visitor-checking-controller', [
            'visitors' => $visitors
        ]);
    }
}
