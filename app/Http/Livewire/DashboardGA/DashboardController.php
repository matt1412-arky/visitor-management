<?php

namespace App\Http\Livewire\DashboardGA;

use Livewire\Component;
use App\Models\Visitor;
use Livewire\WithPagination;



class DashboardController extends Component
{
    use WithPagination;
    public $visitor;
    public $search = '';
    public $paginator = 10;
    protected $paginationTheme = 'bootstrap';
    public $name;
    public $email;
    public $phone;


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
