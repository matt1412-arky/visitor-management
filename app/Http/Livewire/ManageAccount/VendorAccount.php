<?php

namespace App\Http\Livewire\ManageAccount;

use Livewire\Component;
use App\Models\Vendor;

class VendorAccount extends Component
{
    public Vendor $vendor;
    public $search = '', $paginator;

    protected $rules = [
        'vendor.name' => ['required', 'string', 'max:50', 'min:3'],
        'vendor.email' => ['required', 'unique:vendors', 'max:100'],
        'vendor.password' => ['required', 'max:16']
    ];
    protected $messages = [
        'vendor.*.required' => 'This field :attribute is required.',
        'vendor.name.string' => 'Only abjad a-z',
        'vendor.email.unique' => 'This email address is already taken',
        'vendor.password.max' => 'Enter password',
    ];

    public function mount(Vendor $vendor)
    {
        $this->vendor = $vendor ?? new Vendor();
    }
    public function openModal()
    {
        $this->emit('openModal');
    }
    public function createNewVendor()
    {
        $this->validate();
        $this->vendor->create($this->validate()['vendor'])->dd();
    }
    public function render()
    {
        return view('livewire.manage-account.vendor-account');
    }
}
