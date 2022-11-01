<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vendor;

class VendorAccount extends Component
{
    public Vendor $vendor;
    public $search = '', $paginator;
    static $role_id = 5;

    protected $rules = [
        'vendor.name' => ['required', 'string', 'max:50', 'min:3'],
        'vendor.email' => ['required', 'max:100', 'unique:vendors,email'],
        'vendor.password' => ['required', 'min:3', 'max:16'],
        'vendor.role_id' => ['integer', 'nullable']
    ];
    protected $messages = [
        'vendor.*.required' => 'This field :attribute is required.',
        'vendor.name.string' => 'Only abjad a-z',
        'vendor.email.unique' => 'This email address is already taken',
        'vendor.password.max' => 'The :attribute field max 16 characters',
        'vendor.password.min' => 'The :attribute field max 3 characters',
    ];

    public function mount(Vendor $vendor)
    {
        $this->vendor = $vendor ?? new Vendor();
    }
    public function openModal()
    {
        $this->resetColomn();
        $this->emit('openModal');
    }
    public function createNewVendor()
    {
        $data =  $this->validate()['vendor'];
        $data['role_id'] = static::$role_id;
        $data['password'] = bcrypt($data['password']); // rush code
        $this->vendor->create($data);
        $this->resetColomn();
    }

    public function render()
    {
        return view('livewire.vendor-account', [
            'vendors' => Vendor::all(),
        ])->extends('layout.apps');
    }

    private function resetColomn(): void
    {
        $this->vendor->name = '';
        $this->vendor->email = '';
        $this->vendor->password = '';
    }
}
