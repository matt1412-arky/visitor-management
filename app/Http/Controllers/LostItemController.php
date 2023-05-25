<?php

namespace App\Http\Controllers;

use App\Models\LostItem;
use App\Models\Visitor;
use App\Models\KaryawanGA;
use Illuminate\Http\Request;

class LostItemController extends Controller
{
    public function index()
    {
        $lostItems = LostItem::with('visitor', 'karyawan')->get();
        return view('lost-items.index', compact('lostItems'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_name' => 'required',
            'item_image' => 'required|image',
            'status' => 'required',
            'visitor_id' => 'required',
            'karyawan_id' => 'required',
        ]);

        if ($request->hasFile('item_image')) {
            $imagePath = $request->file('item_image')->store('images', 'public');
        }

        $lostItem = LostItem::create([
            'item_name' => $request->item_name,
            'item_image' => $imagePath,
            'status' => $request->status,
            'visitor_id' => $request->visitor_id,
            'karyawan_id' => $request->karyawan_id,
        ]);

        return redirect()->route('lost-items.index');
    }
}
