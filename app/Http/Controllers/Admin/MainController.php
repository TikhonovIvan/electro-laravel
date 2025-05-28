<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $productsCount = Product::count();
        $ordersCount = Order::count();
        $usersCount = User::count();

        return view('admin.index', [
            'productsCount' => $productsCount,
            'ordersCount' => $ordersCount,
            'usersCount' => $usersCount,
        ]);
    }
}
