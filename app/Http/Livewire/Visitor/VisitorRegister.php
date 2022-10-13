<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\Visitor;

class VisitorRegister extends Component
{
    public Visitor $visitor;
    protected $rules = [
        'visitor.name' => 'required|alpha', // fullname
        'visitor.phone' => 'string|required',
        'visitor.age' => 'required|numeric',
        'visitor.invitation_from' => 'required',
        'visitor.visitation_purpose' => 'string|required',
        'visitor.transportasi_visitor' => 'string|required',
        'visitor.waktu_kunjungan' => 'string|required',
        'visitor.plat_nomor' => 'nullable|required',
        'visitor.picture' => 'file|nullable',
        'visitor.file_surat' => 'nullable',
        'visitor.no_darurat' => 'required|numeric',
    ];
    protected $messages = [
        'visitor.*.required' => 'Kolom ini harus diisi',
        'visitor.age.numeric' => 'Age hanya menerima nilai angka',
    ];

    // protected $validationAttributes = [ // just need attribute
    //     'email' => 'email address'
    // ];
    public function mount(Visitor $visitor)
    {
        $this->visitor = $visitor ?? new Visitor();
    }

    public function render()
    {
        return view('livewire.visitor.visitor-register', []);
    }
    public function register()
    {
        $this->validate();
        $v = Visitor::find(50)->update($this->validate()['visitor']);
        if ($v) {
            $this->resetKolom();
            $this->showToastr("success", "Your data has been saved");
        } else {
            $this->resetKolom();
            $this->showToastr("error", "Your data has'nt been saved");
        }
    }
    public function showToastr(string $type, string $message)
    {
        return $this->dispatchBrowserEvent(
            'showToastr',
            ['type' => $type, 'msg' => $message]
        );
    }
    private function resetKolom(): void
    {
        $this->visitor->name = '';
        $this->visitor->phone = '';
        $this->visitor->age = '';
        $this->visitor->invitation_from = '';
        $this->visitor->visitation_purpose = '';
        $this->visitor->transportasi_visitor = '';
        $this->visitor->waktu_kunjungan = '';
        $this->visitor->plat_nomor  = '';
        $this->visitor->picture = '';
        $this->visitor->file_surat = '';
        $this->visitor->no_darurat = '';
    }
}
