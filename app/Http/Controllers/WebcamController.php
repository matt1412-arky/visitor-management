<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebcamController extends Controller
{
    public function index()
    {
        return view('layout/navigation-sidebar/manage-visitor.capture-KTP');
    }
    public function takePicture(Request $request)
    {
        $request->validate([
            'nik' => ['required'],
            'image' => ['required']
        ], [
            'nik.required' => "This file is required"
        ]);
        if ($request->image == null) {
            session()->flash('error', 'Anda harus mengambil gamabr');
        };

        $img = $request->image;
        $folderPath = "uploads/";
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';
        $file = $folderPath . $fileName;
        Storage::put($file, $image_base64);
        return to_route('home.capture-ktp');
    }
}
