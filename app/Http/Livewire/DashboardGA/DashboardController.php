<?php

namespace App\Http\Livewire\DashboardGA;

use Livewire\Component;
use App\Models\Visitor;
use Livewire\WithPagination;

class DashboardController extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.dashboard-g-a.dashboard-controller', [
            'visitors' => Visitor::paginate(20),
        ]);
    }
}
