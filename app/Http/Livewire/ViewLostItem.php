<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{
    LostItem,
    Visitor,
    KaryawanGA
};

class ViewLostItem extends Component
{
    public $search = '';

    public function render()
    {
        $visitors = Visitor::all();
        $employees = KaryawanGA::all();

        $lostItems = LostItem::with('visitor', 'karyawan')
            ->when($this->search, function ($query) {
                $query->where('item_name', 'like', "%" . $this->search . "%");
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.view-lost-item', compact('lostItems'));
    }
}
