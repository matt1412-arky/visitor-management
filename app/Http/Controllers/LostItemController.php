<?php

namespace App\Http\Controllers;

use App\Models\LostItem;
use Illuminate\Http\Request;

class LostItemController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_name' => 'required',
            'item_image' => 'required|image',
            'status' => 'required',
        ]);

        // Upload gambar ke direktori tertentu (misalnya: public/storage/lost-items)
        $imagePath = $request->file('item_image')->store('lost-items', 'public');

        // Simpan data ke database
        LostItem::create([
            'item_name' => $validatedData['item_name'],
            'item_image' => $imagePath,
            'status' => $validatedData['status'],
        ]);

        return response()->json(['message' => 'Data successfully stored'], 201);
    }

    public function index()
    {
        $lostItems = LostItem::all();
        return view('layout/navigation-sidebar/manage-visitor.lost-items', compact('lostItems'));
    }
}
