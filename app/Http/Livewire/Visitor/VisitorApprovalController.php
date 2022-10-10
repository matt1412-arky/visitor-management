<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\BarcodeStatus;
use App\Models\VisitorRegis;

class VisitorApprovalController extends Component
{
    public function render()
    {
        return view('livewire.visitor.visitor-approval-controller', [
            'data' => BarcodeStatus::all(), // abaikan
            'visitor_regis' => VisitorRegis::all(),
        ]);
    }
}
