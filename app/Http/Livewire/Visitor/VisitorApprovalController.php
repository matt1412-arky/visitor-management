<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\Barcode;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;

class VisitorApprovalController extends Component
{
    public $search;
    public function render()
    {
        $visitors = null;
        if ($this->search) {
            $visitors = Barcode::where(function ($q) {
                $q->whereHas('link', function ($q) {
                    $q->whereHas('visitor', function ($q) {
                        $q->where('name','like', '%' . $this->search . '%');
                    })->where('id_karyawan', auth('karyawan_gaa')->id());
                });
            })->get();
        } else {
            $visitors = Barcode::get();
        }
        return view('livewire.visitor.visitor-approval-controller', [
            // 'data_barcodes' => Barcode::all(),
            'data_barcodes' => $visitors,
        ]);
    }

    // if(){} // karyawan ga
    public function onClickBtnApprove(Barcode $barcode): void
    {
        $barcode->update([
            'status' => $barcode->status == 'pending' ? 'approve' : 'pending'
        ]);
    }
}
