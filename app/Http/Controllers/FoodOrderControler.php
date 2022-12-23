<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{OrderMenu, PaketMenu};

class FoodOrderControler extends Controller
{
    public function index(Request $req)
    {
        return view('layout/navigation-sidebar/food-management.food-order', [
            'paketMenus' => PaketMenu::all(),
        ]);
    }
    public function orderFood($id)
    {
        $nik_karyawan = auth('karyawan_gaa')->id();

        if (OrderMenu::where('NIK_Karyawan', $nik_karyawan)->first()) {
            return response()->json([
                'message' => 'Kamu tidak bisa memesan lagi'
            ], 422);
        }
        $orderMenu = new OrderMenu();
        $orderMenu->NIK_Karyawan = $nik_karyawan;
        $orderMenu->id_paket_menu = $id;
        $save = $orderMenu->save();
        if ($save) {
            return response()->json([
                'status' => true,
                'message' => 'Success Ordered Food'
            ], 201);
        }
        return response()->json([
            'status' => false,
            'message' => 'There are something went wrong!',
        ], 500);
    }
}
