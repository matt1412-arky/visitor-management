<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{PaketMenu, Menu};
use Illuminate\Support\Facades\Validator;


class VendorController extends Controller
{
    public function index()
    {
        return view('layout/navigation-sidebar/food-management.insert-menu', []);
    }

    public function vendorSchedule()
    {
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
                'picture' => ['image', 'mimes:png,jpg,jpeg', 'max:2048']
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()->toArray(),
            ]);
        } else {
            $data = $validator->getData();
            $filename = '';
            if ($req->hasFile('picture')) {
                $filename = $req->file('picture')
                    ->move(
                        'vendors/vendor-menu',
                        $req->file('picture')->getClientOriginalName()
                    );
            }
            $data['picture'] = $filename;
            $paket_menu = PaketMenu::create($data);
            if ($paket_menu) {
                return response()->json([
                    'status' => true,
                    'title' => 'Created successfully',
                    'type' => 'success',
                    'msg' => 'New data was created successfully' . $paket_menu['picture']
                ]);
            } else {
                return response()->json([
                    'status' => true,
                    'title' => 'There something went wrong',
                    'type' => 'warning',
                    'msg' => 'Error inserting data into database'
                ]);
            }
        }
    }

    public function getMenus(Request $req)
    {
        if ($req->has('q')) {
            $menus = Menu::orderBy('name', 'asc')->where('name', 'like', "%$req->q%")
                ->limit(5)->get();
        } else {
            $menus = Menu::orderBy('name', 'asc')
                ->limit(5)->get();
        }
        return response()->json($menus);
    }
}
