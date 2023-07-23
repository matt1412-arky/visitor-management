<?php

namespace App\Http\Controllers;

use App\Models\LostItem;
use App\Models\Visitor;
use App\Models\KaryawanGA;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LostItemController extends Controller
{
    public function index(Request $request)
    {
        $visitors = Visitor::all();
        $employees = KaryawanGA::all();
        $search = $request->input('search');
        $lostItems = LostItem::with('visitor', 'karyawan')
            ->when($search, function ($query) use ($search) {
                $query->where('item_name', 'like', "%$search%");
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('lost-items.index', compact('lostItems', 'visitors', 'employees'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_name' => 'required',
            'item_image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
            'id_visitor' => 'required',
            'id_karyawan' => 'required',
        ], [
            'item_image.mimes' => 'Image only allowed with JPEG, JPG and PNG extensions',
        ]);

        if ($request->hasFile('item_image')) {
            $imageFile = $request->file('item_image');
            $imageName = Carbon::now()->format('YmdHis') . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = $imageFile->storeAs('images', $imageName, 'public');
        }

        $lostItem = LostItem::create([
            'id_visitor' => $request->id_visitor,
            'id_karyawan' => $request->id_karyawan,
            'item_name' => $request->item_name,
            'item_image' => $imageName,
            'status' => $request->status,
        ]);
        session()->flash('success', 'Data successfully added.');

        return redirect()->route('home.lost-item.index');
    }

    public function updateLostItemStatus($id)
    {
        $lostItem = LostItem::findOrFail($id);

        if ($lostItem->status === 'Not Taken') {
            $lostItem->status = 'Taken';
            $message = 'Item status has been updated to Taken.';
        } elseif ($lostItem->status === 'Taken') {
            $lostItem->status = 'Not Taken';
            $message = 'Item status has been updated to Not Taken.';
        }

        $lostItem->save();

        return redirect()->route('home.lost-item.index')->with('success', $message);
    }
}
