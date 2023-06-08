<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{
    Visitor,
    Visit
};

class VisitorData extends Component
{
    public $search = '';
    public $paginator = 10;
    protected $paginationTheme = 'bootstrap';

    public function checkin(Visit $visit)
    {
        $isPending = $visit->checkin === 'pending';

        $isPending ? $visit->update([
            'checkin' => 'checkin',
        ]) :
            $visit->update([
                'checkin' => 'pending',
            ]);
        $this->showToastr(
            'success',
            'Data has been successfully updated'
        );
    }
    public function checkout(Visit $visit)
    {
        $isPending = $visit->checkout === 'pending';

        $isPending ? $visit->update([
            'checkout' => 'checkout',
        ]) :
            $visit->update([
                'checkout' => 'pending',
            ]);
        $this->showToastr(
            'success',
            'Data has been successfully updated'
        );
    }
    public function render()
    {
        $visitors = Visit::whereHas('visitor', function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->orWhere('phone', 'like', '%' . $this->search . '%');
        })->paginate($this->paginator);

        return view('livewire.visitor-data', compact('visitors'));
    }

    public function showToastr(
        string $type,
        string $message,
    ) {
        return $this->emit('showToastr', [
            'type' => $type,
            'message' => $message,
        ]);
    }
}
