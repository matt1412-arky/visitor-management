<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Barcode, Visitor};
use Illuminate\Support\Facades\Auth;
use App\Models\RegistrationVisitor;
use Livewire\Livewire;

class VisitorApprovalController extends Component
{
    public $search;
    public function render()
    {
        // $visitors = null;
        return view('livewire.visitor-approval-controller', [
            'visitors' => RegistrationVisitor::all(),
        ])->extends('layout.apps');
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
