<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::query()->find(Auth::id());
        return view('checkout',[
            'user' => $user
        ]);
    }

    public function storeCart(string $id)
    {

        return view('store-cart'

        );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'phone' => 'required|string',
            'desc' => 'nullable|string',
            'products' => 'required|array', // массив товаров с количеством и id
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        // Создаем номер заказа
        $orderNumber = Str::upper(Str::random(10));

        // Вычисляем сумму заказа
        $totalPrice = 0;

        foreach ($request->products as $item) {
            $product = Product::findOrFail($item['id']);
            $priceAfterDiscount = $product->price - $product->discount;
            $totalPrice += $priceAfterDiscount * $item['quantity'];
        }

        // Создаем заказ
        $order = Order::create([
            'user_id' => auth()->check() ? auth()->id() : null,
            'order_number' => $orderNumber,
            'total_price' => $totalPrice,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'phone' => $request->phone,
            'status' => 'в обработке',
            // можно добавить поле 'description' если есть в таблице
        ]);

        // Сохраняем товары заказа
        foreach ($request->products as $item) {
            $product = Product::findOrFail($item['id']);
            $priceAfterDiscount = $product->price - $product->discount;
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'product_name' => $product->name,
                'price' => $priceAfterDiscount,
                'quantity' => $item['quantity'],
                'total' => $priceAfterDiscount * $item['quantity'],
            ]);
        }

        // Можно отправить письмо или редирект
        return redirect()->route('order.thankyou', $order->id)->with('success', 'Заказ успешно оформлен');
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
