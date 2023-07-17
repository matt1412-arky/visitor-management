<?php

namespace App\Http\Livewire\DashboardGA;

use Livewire\Component;
use App\Models\Visitor;
use App\Models\Visit;
use App\Models\KaryawanGA;
use App\Models\LostItem;
use App\Models\FeedBack;
use App\Models\Appointment;
use Livewire\WithPagination;

class DashboardController extends Component
{
    use WithPagination;

    public $search = '';
    public $paginator = 10;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $appointments = Appointment::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate($this->paginator);

        $totalVisitors = Visitor::count();
        $totalVisits = Visit::count();
        $totalKaryawan = KaryawanGA::count();
        $totalFeedback = FeedBack::count();
        $totalLostItem = LostItem::count();
        $totalAppointment = Appointment::count();

        return view('livewire.dashboard-g-a.dashboard-controller', [
            'appointments' => $appointments,
            'totalVisitors' => $totalVisitors,
            'totalVisits' => $totalVisits,
            'totalKaryawan' => $totalKaryawan,
            'totalFeedback' => $totalFeedback,
            'totalLostItem' => $totalLostItem,
            'totalAppointment' => $totalAppointment
        ]);
    }
}
