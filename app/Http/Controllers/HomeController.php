<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Link;

class HomeController extends Controller
{
    public function registrasi(Link $link, $token)
    {
        $isValidLink = $link->where('id_visitor', auth('visitor')->id())
            ->where('token', $token)
            ->first();

        if (!$isValidLink) return to_route('home.dashboard-page');
        return view('layout/navigation-sidebar/manage-visitor.form-registrasi');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return to_route('auth.login');
    }
}
