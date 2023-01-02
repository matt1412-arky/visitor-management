<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RegistrationVisitor;

class VisitorData extends Component
{
    public function render()
    {
        return view('livewire.visitor-data', [
            'visitors' => RegistrationVisitor::get(),
        ]);
    }
}
