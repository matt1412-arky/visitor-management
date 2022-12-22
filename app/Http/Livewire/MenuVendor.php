<?php

namespace App\Http\Livewire;

use App\Models\PaketMenu;
use Livewire\Component;

class MenuVendor extends Component
{
    public function render()
    {
        return view('livewire.menu-vendor', [
            'vendor_menus' => PaketMenu::all(),
        ]);
    }
}
