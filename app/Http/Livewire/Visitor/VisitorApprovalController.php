<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\Barcode;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use App\Models\RegistrationVisitor;
use Livewire\Livewire;

class VisitorApprovalController extends Component
{
    public $search;
    public function render()
    {
        // $visitors = null;
        return view('livewire.visitor.visitor-approval-controller', [
            'visitors' => RegistrationVisitor::all(),
        ]);
    }

    public function onClickBtnApprove(): void
    {
        $this->showAlertDialog(
            'Apakah anda yakin',
            'info',
            'Dengan approve this visitor'
        );
    }
    public function showAlertDialog(string $title, string $type, string $message): \Livewire\Event
    {
        return $this->emit('showAlertDialog', [
            'title' => $title,
            'type' => $type,
            'msg' => $message
        ]);
    }
}
