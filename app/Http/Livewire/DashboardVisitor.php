<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Visitor;
use App\Models\Visit;
use App\Models\KaryawanGA;

class DashboardVisitor extends Component
{
    public function render()
    {
        $totalVisitors = Visitor::count();
        $totalVisits = Visit::count();
        $totalKaryawan = KaryawanGA::count();

        return view('livewire.dashboard-visitor', [
            'totalVisitors' => $totalVisitors,
            'totalVisits' => $totalVisits,
            'totalKaryawan' => $totalKaryawan,
        ]);
    }
}
