<?php

namespace App\Http\Livewire\Visitor;

use Livewire\Component;
use App\Models\Visitor;
use App\Models\Barcode;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class VisitorRegister extends Component
{
    use WithFileUploads;
    public Visitor $visitor;
    public $id_link;
    public $picture, $file_upload;
    protected $rules = [
        'visitor.name' => 'required|string|max:50|min:4|regex:/^[\pL\s\-]+$/u', // fullname
        'visitor.phone' => 'string|required',
        'visitor.age' => 'required|numeric',
        'visitor.invitation_from' => 'required',
        'visitor.visitation_purpose' => 'string|required',
        'visitor.transportasi_visitor' => 'string|required',
        'visitor.waktu_kunjungan' => 'string|required',
        'visitor.plat_nomor' => 'nullable|required',
        'picture' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        'file_upload' => 'nullable|mimes:pdf|max:2048',
        'visitor.no_darurat' => 'required|numeric',
    ];

    // protected $messages = [
    protected $messages = [
        'visitor.*.required' => 'This field is required',
        'visitor.name.regex' => 'abjad a-z',
        'visitor.age.numeric' => 'Age hanya menerima nilai angka',
        'picture.mimes' => 'Picture hanya berupa png,jpg,jpeg',
        'picture.max' => 'Picture tidak boleh lebih dari 2MB',
        'file_upload.mimes' => 'File hanya berupa pdf',
        'file_upload.max' => 'File tidak boleh lebih dari 2MB',
    ];

    public function mount(Visitor $visitor)
    {
        $this->visitor = $visitor ?? new Visitor();
        $this->visitor->invitation_from = __(request()->link->karyawan_ga->name);
        $this->id_link = request()->link->id;
    }

    public function render()
    {
        return view('livewire.visitor.visitor-register');
    }
    public function register()
    {
        $this->validate();
        $filename = '';
        $picture_name = '';
        if ($this->picture != null && in_array($this->picture->extension(), ['jpg', 'png', 'jpeg'])) {
            $picture_name = $this->picture->storeAs('pictures', "picture-"  . time() . Str::random(10) . "." . $this->picture->extension());
        }
        if ($this->file_upload != null && ($this->file_upload->extension() == 'pdf')) {
            $filename = $this->file_upload->storeAs('documents', "attacment-"  . time() . Str::random(10) . "." . $this->file_upload->extension());
        }
        $file_data = [
            'picture' => $picture_name,
            'file_surat' => $filename
        ];
        $vitor_data = array_merge($this->validate()['visitor'], $file_data);
        $v = Visitor::find(auth('visitor')->id())
            ->update($vitor_data);
        if ($v) {
            $this->insertBarcode($this->id_link);
            $this->resetKolom();
            $this->showToastr("Berhasil register", "success", "Your data has been saved");
        } else {
            $this->resetKolom();
            $this->showToastr("There are something went wrong!", "error", "Your data has'nt been saved");
        }
    }
    public function showToastr(string $title, string $type, string $message)
    {
        return $this->dispatchBrowserEvent(
            'showToastr',
            [
                'title' => $title,
                'type' => $type,
                'msg' => $message
            ]
        );
    }
    private function insertBarcode(int $fk_link): void
    {
        if ($fk_link === null) return;
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
        $this->visitor->invitation_from = '';
        $this->visitor->visitation_purpose = '';
        $this->visitor->transportasi_visitor = '';
        $this->visitor->waktu_kunjungan = '';
        $this->visitor->plat_nomor  = '';
        $this->picture = '';
        $this->file_upload = '';
        $this->visitor->no_darurat = '';
    }
}
