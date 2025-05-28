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

                <div class="card card-warning card-outline mb-4">
                    <div class="card-header">
                        <div class="card-title">Информация о заказе: № - {{$order->order_number}}</div>
                    </div>

                    <div class="card-body">
                        <div class="row">


                            {{-- Правая колонка: информация о товаре --}}
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Номер заказа: </th>
                                        <td>№ - {{$order->order_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Общая цена заказа: </th>
                                        <td>{{$order->total_price}} сом</td>
                                    </tr>
                                    <tr>
                                        <th>ФИО клиент</th>
                                        <td>{{$order->first_name}} {{$order->last_name}} </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Телефон</th>
                                        <td>{{$order->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Город</th>
                                        <td>{{$order->city}}</td>
                                    </tr>
                                    <tr>
                                        <th>Адрес доставки</th>
                                        <td>{{$order->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Статус заказа</th>
                                        <td>{{$order->status}}</td>
                                    </tr>


                                </table>


                            </div>
                            <div class="col-md-5">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Список товаров</th>
                                        <td>Количество шт.</td>
                                    </tr>
                                    @foreach($order->items as $item)
                                        <tr>
                                            <td>{{ $item->product_name }}</td>
                                            <td>{{ $item->quantity }} шт</td>
                                        </tr>
                                    @endforeach

                                </table>


                            </div>

                            <div class="col-12 mt-5 d-none">
                                <h5>Примечание к заказу</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection
