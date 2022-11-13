<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithFileUploads};
use App\Models\{Visitor};
use Illuminate\Support\Str;
use App\Trait\{GenerateLinkTrait, AlertTrait};

class VisitorRegister extends Component
{
    use WithFileUploads;
    public Visitor $visitor;
    use GenerateLinkTrait;
    use AlertTrait;

    public function mount(Visitor $v)
    {
        $this->visitor = $v ?? new Visitor();
        $this->id_karyawan = 16673910243453;
    }

    public function render()
    {
        return view('livewire.visitor-register')->extends('layout.apps');
    }
    public function register()
    {
        $data = $this->validate()['visitor'];
        if ($this->picture != null && in_array($this->picture->extension(), ['jpg', 'png', 'jpeg'])) {
            $picture_name = $this->picture
                ->storeAs(
                    'pictures',
                    "picture-"  . time() . Str::random(10) . "." . $this->picture->extension()
                );
            $data['picture'] = $picture_name;
        }
        if ($this->file_upload != null && ($this->file_upload->extension() == 'pdf')) {
            $filename = $this->file_upload
                ->storeAs(
                    'documents',
                    "attacment-"  . time() . Str::random(10) . "." . $this->file_upload->extension()
                );
            $data['file_surat'] = $filename;
        }
        $visitor = Visitor::find(auth('visitor')->id())->update($data);
        $isRegis = $this->insertRegisVisitor($this->id_karyawan ?? 16673910243453, auth('visitor')->id());
        if ($visitor && $isRegis) {
            $this->resetKolom();
            $this->showToastr("Berhasil register", "success", "Your data has been saved");
        } else {
            $this->resetKolom();
            $this->showToastr("There are something went wrong!", "error", "Your data has'nt been saved");
        }
    }
}
