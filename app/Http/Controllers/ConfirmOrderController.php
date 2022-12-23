<?php

namespace App\Http\Controllers;

use App\Models\ConfirmOrder;
use Illuminate\Http\Request;

class ConfirmOrderController extends Controller
{
    public function index(Request $req)
    {
        return view(
            'layout/navigation-sidebar/food-management.confirmed-order',
            [
                'confirmed_orders' => ConfirmOrder::all(),
            ]
        );
    }
}
