<?php

namespace App\Http\Livewire\DashboardGA;

use Livewire\Component;
use App\Models\Visitor;
use Livewire\WithPagination;

class DashboardController extends Component
{
    use WithPagination;

    public $search = '';
    public $paginator = 10;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $visitors = Visitor::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate($this->paginator);

        $totalVisitors = Visitor::count();

        return view('livewire.dashboard-g-a.dashboard-controller', [
            'visitors' => $visitors,
            'totalVisitors' => $totalVisitors,
        ]);
    }
}
