<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketMenu;
use Illuminate\Support\Facades\Validator;


class VendorController extends Controller
{
    public function index()
    {
        return view('layout/navigation-sidebar/food-management.insert-menu', []);
    }
    public function store(Request $req)
    {
        $validator = Validator::make(
            $req->all(),
            [
                'nama_paket_menu' => ['required', 'string'],
                'minuman' => ['required', 'string'],
                'makanan' => ['required', 'string'],
                'jumlah' => ['required', 'numeric'],
                'cost' => ['required', 'numeric'],
                'picture' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048']
            ]
        );
        if ($validator->fails()) {
            session()->flash('error', 'there are some errors');
        } else {
            $paket_menu = PaketMenu::create($req->all());
            if ($paket_menu) {
                session()->flash('success', 'Data Successfully created!');
            } else {
                session()->flash('fail', 'There something went wrong while creating the menu');
            }
        }
    }
}
