<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithPagination, Livewire};
use App\Models\{Barcode, Visitor, RegistrationVisitor};
use Illuminate\Support\Facades\Auth;


class VisitorApprovalController extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $status = '';
    public $groupBy = '';
    public $date;

    public function render()
    {
        // $visitors = null;
        return view('livewire.visitor-approval-controller', [
            'visitors' => RegistrationVisitor::paginate($this->perPage),
        ])->extends('layout.apps');
    }

    public function approvedCheckin(RegistrationVisitor $regVis)
    {
        $regVis->updateOrFail([
            'status' => ''
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
