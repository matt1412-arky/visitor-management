<?php

namespace App\Trait;

use App\Models\{Visitor, Link, RegistrationVisitor as RV};
use Illuminate\Support\Facades\URL;

trait GenerateLinkTrait
{
    public $id_link;
    public $picture, $file_upload;
    public $id_karyawan;
    protected $rules = [
        'visitor.name' => 'required|string|max:50|min:4|regex:/^[\pL\s\-]+$/u', // fullname
        'visitor.phone' => 'string|required',
        'visitor.age' => 'required|numeric',
        'visitor.email' => 'nullable',
        'visitor.invitation_from' => 'required',
        'visitor.visitation_purpose' => 'string|required',
        'visitor.transportasi_visitor' => 'string|required',
        'visitor.waktu_kunjungan' => 'string|required',
        'visitor.plat_nomor' => 'nullable|required',
        'visitor.picture' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        'visitor.file_upload' => 'nullable|mimes:pdf|max:2048',
        'visitor.no_darurat' => 'required|numeric',
    ];

    protected $messages = [
        'visitor.*.required' => 'This field is required',
        'visitor.name.regex' => 'abjad a-z',
        'visitor.age.numeric' => 'Age hanya menerima nilai angka',
        'picture.mimes' => 'Picture hanya berupa png,jpg,jpeg',
        'picture.max' => 'Picture tidak boleh lebih dari 2MB',
        'file_upload.mimes' => 'File hanya berupa pdf',
        'file_upload.max' => 'File tidak boleh lebih dari 2MB',
    ];


    public function resetKolom(): void
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
    public function insertRegisVisitor(int $id_karyawan, int $id_visitor): bool
    {
        $regisVisitor = RV::create([
            "id_karyawan" => $id_karyawan,
            "id_visitor" => $id_visitor,
        ]);
        // Link::find($this->id_link)->first()->delete();
        return $regisVisitor->count();
    }
}
