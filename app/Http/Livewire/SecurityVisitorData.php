<?php

namespace App\Http\Livewire;

use App\Models\Visit;
use Livewire\Component;

class SecurityVisitorData extends Component
{
    public $visits;

    public function mount()
    {
        // Retrieve visit data with related visitor information
        $this->visits = Visit::with('visitor')->get();
    }

    public function render()
    {
        return view('livewire.security-visitor-data', [
            'visits' => $this->visits,
        ]);
    }
}
