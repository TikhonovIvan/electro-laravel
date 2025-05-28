@extends('admin.layouts.default')


@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Склад продуктов</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item">Заказы</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header d-none ">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary  px-5 ">Добавить</a>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Номер заказа</th>
                                <th>ФИО клиента</th>
                                <th>Телефон</th>
                                <th>Email</th>
                                <th>Адрес доставки</th>
                                <th>Статус</th>
                                <th style="width: 160px">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)


                                <tr class="align-middle">
                                    <td>{{$order->id}}</td>
                                    <td>№ - {{$order->order_number}}</td>
                                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->address}}</td>

                                    <td>
                                        @if($order->status === 'в обработке')
                                            <span style="color: orange;">{{$order->status}}</span>
                                        @elseif($order->status === 'в исполнении')
                                            <span style="color: blue;">{{$order->status}}</span>
                                        @elseif($order->status === 'выполнен')
                                            <span style="color: green;">{{$order->status}}</span>
                                        @else
                                            <span>{{$order->status}}</span>
                                        @endif
                                    </td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('admin.order.edit', $order->id) }}" class="btn btn-success"><i
                                                class="bi bi-pencil"></i></a>

                                        <a href="" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                        <a href="" class="btn btn-warning">
                                            <i class="bi bi-printer"></i>
                                        </a>
                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Удалить товар?')">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </form>


                                    </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                        <div class="mt-3">
{{--                            {{ $products->links() }}--}}
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
