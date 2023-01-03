<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{FeedbackMenu};

class FeedbackMenuController extends Controller
{
    public function store(Request $req)
    {
        // $feedBackMenu = new FeedbackMenu();
        // $feedBackMenu->NIK_Karyawan =  	id_paket_menu	rating	gambar	feedback
        $user = auth('karyawan_gaa')->user();
        $user->feedbackMenu()->create([
            'NIK_Karyawan' => $user->NIK,
            'id_paket_menu' => $req->id_paket_menu,
            'rating' => $req->rating,
            'gambar' => $req->gambar,
            'feedback' => $req->feedback,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Success send a feedback'
        ], 201);
    }
}
