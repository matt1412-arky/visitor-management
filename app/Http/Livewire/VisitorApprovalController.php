<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithPagination, Livewire};
use App\Models\{RegistrationVisitor};
use Illuminate\Support\Facades\Auth;


class VisitorApprovalController extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $status = '';
    public $groupBy = '';
    public $date;
    public bool $modeCheckIn = true;

    protected $listeners = [
        'approvedCheckin',
        'approvedCheckout'
    ];

    public function render()
    {
        // $visitors = null;
        return view('livewire.visitor-approval-controller', [
            'visitors' => RegistrationVisitor::paginate($this->perPage),
        ])->extends('layout.apps');
    }

    public function approvedCheckout(RegistrationVisitor $regVis)
    {
        $save = $regVis->updateOrFail([
            'checkout' => 'approved',
        ]);
        if ($save) {
            return $this->showAlertDialog(
                'showToastr',
                (object)[
                    'event_name' => '',
                    'type' => 'success',
                    'message' => 'This visitor has been approved'
                ]
            );
        }
        return $this->showAlertDialog(
            'showToastr',
            (object)[
                'event_name' => 'showToastr',
                'type' => 'error',
                'message' => 'There are something went wrong!'
            ]
        );
    }
    public function approvedCheckin(RegistrationVisitor $regVis)
    {
        $save = $regVis->updateOrFail([
            'status' => $regVis->status == 'approved' ? 'pending' : 'approved',
        ]);
        if ($save) {
            return $this->showAlertDialog(
                'showToastr',
                (object)[
                    'event_name' => '',
                    'type' => 'success',
                    'message' => 'This visitor has been approved'
                ]
            );
        }
        return $this->showAlertDialog(
            'showToastr',
            (object)[
                'event_name' => 'showToastr',
                'type' => 'error',
                'message' => 'There are something went wrong!'
            ]
        );
    }

    public function onClickBtnApprove($id, $val): void
    {
        $this->showAlertDialog(
            'showAlertDialog',
            (object) array(
                'event_name' => '',
                'title' => 'Apakah anda yakin',
                'type' => 'info',
                'msg' => 'Dengan approve this visitor',
                'id' => $id,
                'mode' => $val
            ),
        );
    }

    public function showAlertDialog(string $event, ?object $options,): \Livewire\Event
    {
        return $this->emit($event, (array) $options);
    }
}
