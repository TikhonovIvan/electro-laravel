<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index',[
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with('items')->findOrFail($id);

        return view('admin.order.show', [
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::query()->findOrFail($id);

        return view('admin.order.edit',[
            'order' => $order
        ]);
    }

   /*обновление информации о заказе */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|in:в обработке,в исполнении,выполнен',
        ]);

        $order->update($validated);

        return redirect()->back()->with('success', 'Заказ успешно обновлён.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::query()->findOrFail($id);
        $order->delete();
        return redirect()->back()->with('success', 'Заказ успешно удален.');
    }


    public function print($id)
    {
        $order = Order::with('items')->findOrFail($id);

        return view('admin.order.print', [
            'order' => $order
        ]);
    }

}
