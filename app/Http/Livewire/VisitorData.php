<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{
    Appointment,
    Visit
};

class VisitorData extends Component
{
    public $search = '';
    public $paginator = 10;
    protected $paginationTheme = 'bootstrap';

    public function checkin($visitId)
    {
        $visit = Visit::findOrFail($visitId);
        $isPending = $visit->checkin === 'pending';

        $isPending ? $visit->update([
            'checkin' => 'checkin',
        ]) :
            $visit->update([
                'checkin' => 'pending',
            ]);
        $this->showToastr(
            'success',
            'Data has been successfully updated.'
        );
    }

    public function checkout($visitId)
    {
        $visit = Visit::findOrFail($visitId);
        $isPending = $visit->checkout === 'pending';

        $isPending ? $visit->update([
            'checkout' => 'checkout',
        ]) :
            $visit->update([
                'checkout' => 'pending',
            ]);
        $this->showToastr(
            'success',
            'Data has been successfully updated.'
        );
    }

    public function render()
    {
        $visitors = Visit::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'asc')
            ->paginate($this->paginator);

        return view('livewire.visitor-data', compact('visitors'));
    }


    public function showToastr($type, $message)
    {
        $this->dispatchBrowserEvent('showToastr', [
            'type' => $type,
            'message' => $message,
        ]);
    }
}
