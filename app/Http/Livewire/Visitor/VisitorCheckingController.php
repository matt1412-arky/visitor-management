<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\Barcode;
use Livewire\WithPagination;

class VisitorCheckingController extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.visitor.visitor-checking-controller', [
            'visitors' => Barcode::paginate()
        ]);
    }
}
