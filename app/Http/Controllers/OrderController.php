<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function storeCart()
    {

        return view('store-cart');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::query()->find(Auth::id());
        return view('checkout', [
            'user' => $user
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'phone' => 'required|string',
            'products' => 'required|json',
        ]);

        DB::transaction(function () use ($request) {
            $cartItems = json_decode($request->products, true);

            $total = collect($cartItems)->sum(function ($item) {
                $qty = $item['quantity'] ?? ($item['qty'] ?? 1);
                return $item['price'] * $qty;
            });

            $lastOrder = Order::orderBy('id', 'desc')->lockForUpdate()->first();
            $nextOrderNumber = $lastOrder ? $lastOrder->id + 1 : 1;
            $orderNumber = str_pad($nextOrderNumber, 6, '0', STR_PAD_LEFT);

            $order = Order::create([
                'user_id' => auth()->id(),
                'order_number' => $orderNumber,
                'total_price' => $total,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'address' => $request->address,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'phone' => $request->phone,
            ]);

            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['id'],
                    'product_name' => $item['name'],
                    'sku' => $item['sku'] ?? '—', // защита на случай если sku нет
                    'price' => $item['price'],
                    'quantity' => $item['quantity'] ?? ($item['qty'] ?? 1),
                    'total' => $item['price'] * ($item['quantity'] ?? ($item['qty'] ?? 1)),
                ]);
            }
        });

        return redirect()->route('account.form')->with('success', 'Ваш заказ успешно оформлен!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
