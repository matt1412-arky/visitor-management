<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LostItem;
use App\Models\Visitor;
use App\Models\KaryawanGA;

class ViewLostItemController extends Controller
{
    public $search = '';

    public function render(Request $request)
    {
        $visitors = Visitor::all();
        $employees = KaryawanGA::all();

        $lostItems = LostItem::with('visitor', 'karyawan')
            ->when($this->search, function ($query) {
                $query->where('item_name', 'like', "%" . $this->search . "%");
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.view-lost-item', compact('lostItems', 'visitors', 'employees'));
    }
}
