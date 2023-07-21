<?php

namespace App\Http\Livewire;

use App\Models\Visit;
use Livewire\Component;
use Livewire\WithPagination;

class SecurityVisitorData extends Component
{
    use WithPagination;

    public $search = '';
    public $paginator = 10;

    public function render()
    {
        $visits = Visit::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('phone', 'like', '%' . $this->search . '%')
            ->orWhere('visit_date', 'like', '%' . $this->search . '%')
            ->orWhere('arrival_time', 'like', '%' . $this->search . '%')
            ->orWhere('invitation_from', 'like', '%' . $this->search . '%')
            ->orWhere('visitation_purpose', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate($this->paginator);

        return view('livewire.security-visitor-data', [
            'visits' => $visits,
        ]);
    }
}
