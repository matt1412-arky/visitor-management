<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Visitor;
use App\Models\Visit;
use App\Models\LostItem;
use App\Models\FeedBack;

class DashboardVisitor extends Component
{
    public function render()
    {
        $totalVisitors = Visitor::count();
        $totalVisits = Visit::count();
        $totalFeedback = FeedBack::count();
        $totalLostItem = LostItem::count();

        return view('livewire.dashboard-visitor', [
            'totalVisitors' => $totalVisitors,
            'totalVisits' => $totalVisits,
            'totalFeedback' => $totalFeedback,
            'totalLostItem' => $totalLostItem,
        ]);
    }
}
