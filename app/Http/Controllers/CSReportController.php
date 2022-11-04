<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CS_Report;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CSReportController extends Controller
{
    public function index(Request $req)
    {
        return view('layout/navigation-sidebar/CS.cs', []);
    }
    public function create(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'nik_cs' => ['required'],
            'picture' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'location' => ['required', 'string'],
        ], [
            '*' => 'masukkan kolom value untuk kolom ini',
            'picture.image' => 'Hanya berupa image',
            'picture.mimes' => 'Masukkan berupa image',
            'location.string' => 'Masuk nilai berupa alpabet'
        ]);
        if ($validator->fails()) { //
            return response()->json([
                'status' => false,
                'error' => $validator->errors()->toArray()
            ]);
        } else {
            $data = [
                'nik_cs' => $req->nik_cs,
                'picture' => '',
                'location' => $req->location,
            ];
            if ($req->hasFile('picture')) {
                $req->file('picture')
                    ->move('pictures/', Str::random(10) . $req->file('picture')
                        ->getClientOriginalName());
                $data['picture'] = $req->file('picture')->getClientOriginalName();
            }
            $cs_report =  CS_Report::create($data);
            if ($cs_report) {
                return response()->json([
                    'status' => true,
                    'title' => 'Data has been submitted successfully!',
                    'msg' => 'The data that your report has been reported to admin',
                    'type' => 'success',
                ]);
            }
        }
    }
}
