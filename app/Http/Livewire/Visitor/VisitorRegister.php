<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\Visitor;
use App\Models\Barcode;

class VisitorRegister extends Component
{
    public Visitor $visitor;
    public $id_link;
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
        $this->visitor->invitation_from = __(request()->link->karyawan_ga->name);
        $this->id_link = request()->link->id;
    }

    public function render()
    {
        return view('livewire.visitor.visitor-register', []);
    }
    public function register()
    {
        $this->validate();
        $v = Visitor::find(auth('visitor')->id())
            ->update($this->validate()['visitor']);
        if ($v) {
            $this->insertBarcode($this->id_link);
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
    private function insertBarcode(int $fk_link): void
    {
        if ($fk_link !== null) return;

        Barcode::create([
            'id_generate_link' => $fk_link,
            'status' => 'pending'
        ]);
    }
    private function resetKolom(): void
    {
        $this->visitor->name = '';
        $this->visitor->phone = '';
        $this->visitor->age = '';
        // $this->visitor->invitation_from = '';
        $this->visitor->visitation_purpose = '';
        $this->visitor->transportasi_visitor = '';
        $this->visitor->waktu_kunjungan = '';
        $this->visitor->plat_nomor  = '';
        $this->visitor->picture = '';
        $this->visitor->file_surat = '';
        $this->visitor->no_darurat = '';
    }
}
