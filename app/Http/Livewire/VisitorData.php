<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{
    RegistrationVisitor,
    Visit
};

class VisitorData extends Component
{

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
            'berhasil diupdate'
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
            'berhasil diupdate'
        );
    }
    public function render()
    {
        return view('livewire.visitor-data', [
            'visitors' => Visit::get(),
        ]);
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
