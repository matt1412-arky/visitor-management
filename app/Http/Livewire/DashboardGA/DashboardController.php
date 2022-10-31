<?php

namespace App\Http\Livewire\DashboardGA;

use Livewire\Component;
use App\Models\Visitor;
use Livewire\WithPagination;
use App\Models\Link;


class DashboardController extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // $checkedVisitors = $this->visitors->pluck('id')->toArray();

    public $checkedVisitors = [],
        $perPage = 10,
        $sortBy = 'id',
        $orderBy = true;

    private $visitors;

    public function render()
    {
        $this->visitors = Visitor::orderBy($this->sortBy, $this->orderBy ? 'asc' : 'desc')
            ->paginate($this->perPage);
        return view('livewire.dashboard-g-a.dashboard-controller', [
            'visitors' => $this->visitors,
        ]);
    }

    public function doSelected()
    {
        $visitorsSelected = Visitor::whereIn('id', $this->checkedVisitors)->get(['id', 'email']);
        dd($visitorsSelected);
        Visitor::destroy($this->checkedVisitors);
        $this->checkedVisitors = [];
    }

    public function selectAllVisitors()
    {
    }
    public function isCheckId($id)
    {
        return in_array($id, $this->checkedVisitors) ? 'bg-info' : '';
    }
}
