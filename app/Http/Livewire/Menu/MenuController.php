<?php

namespace App\Http\Livewire\Menu;

use Livewire\Component;
use App\Models\Menu;

class MenuController extends Component
{
    public $type, $name, $harga, $picture, $description;

    protected $rules = [
        'type' => ['required', 'string', 'min:3', 'max:30'],
        'name' => ['required', 'string', 'min:3', 'max:30'],
        'harga' => ['required', 'numeric'],
        'picture' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
        'description' => ['required'],
    ];

    protected $messages = [];

    public function render()
    {
        return view('livewire.menu.menu-controller');
    }
    public function saveMenu()
    {
        $data = $this->validate();
        Menu::create($data);
    }
}
