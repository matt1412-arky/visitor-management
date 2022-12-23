<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderMenu;

class ConfirmOrderController extends Controller
{
    public function index(Request $req)
    {
        return view(
            'layout/navigation-sidebar/food-management.confirmed-order',
            [
                'confirmed_orders' => OrderMenu::get(),
            ]
        );
    }
}
