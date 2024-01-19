<?php

namespace App\Http\Livewire\DashboardGA;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Visitor;
use App\Models\Visit;
use App\Models\KaryawanGA;
use App\Models\LostItem;
use App\Models\FeedBack;
use Livewire\WithPagination;

class DashboardController extends Component
{
    use WithPagination;

    public $search = '';
    public $paginator = 10;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // Paginate visits
        $visits = Visit::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate($this->paginator);

        // Count totals
        $totalVisitors = Visitor::count();
        $totalVisits = Visit::count();
        $totalKaryawan = KaryawanGA::count();
        $totalFeedback = FeedBack::count();
        $totalLostItem = LostItem::count();

        return view('livewire.dashboard-g-a.dashboard-controller', [
            'visits' => $visits,
            'totalVisitors' => $totalVisitors,
            'totalVisits' => $totalVisits,
            'totalKaryawan' => $totalKaryawan,
            'totalFeedback' => $totalFeedback,
            'totalLostItem' => $totalLostItem,
        ]);
    }
}
