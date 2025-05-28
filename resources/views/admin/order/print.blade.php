@extends('admin.layouts.default')


@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Информация о заказе</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.orders.index')}}">Заказы</a></li>
                        <li class="breadcrumb-item">Информация о заказе</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="app-content">
        <div class="container-fluid">
            <div class="row">

                <h2>Детали заказа №{{ $order->order_number }}</h2>

                <table>
                    <tr><th>Имя</th><td>{{ $order->first_name }} {{ $order->last_name }}</td></tr>
                    <tr><th>Email</th><td>{{ $order->email }}</td></tr>
                    <tr><th>Телефон</th><td>{{ $order->phone }}</td></tr>
                    <tr><th>Адрес</th><td>{{ $order->city }}, {{ $order->address }}</td></tr>
                    <tr><th>Статус</th><td>{{ $order->status }}</td></tr>
                    <tr><th>Общая сумма</th><td>{{ $order->total_price }} сом</td></tr>
                </table>

                <h3>Список товаров:</h3>
                <table>
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>Количество</th>
                        <th>Цена</th>
                        <th>Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->items as $item)
                        <tr>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->price }} сом</td>
                            <td>{{ $item->total }} сом</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="3" class="text-end">Итоговая сумма:</th>
                        <td><strong>{{ $order->items->sum('total') }} сом</strong></td>
                    </tr>
                    </tbody>
                </table>
                <style>

                    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
                    th, td { padding: 10px; border: 1px solid #000; text-align: left; }
                    h2 { text-align: center; }
                    @media print {
                        .no-print { display: none; }
                    }
                </style>

                <button class="no-print" onclick="window.print()">Печать</button>

            </div>
        </div>
    </div>


@endsection
