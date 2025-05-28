@extends('layouts.app')

@section('title', 'Личный кабинет')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6 fs-4" style="font-weight: 400">

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <h3>Аккаунт пользователя</h3>

                <form class="row g-3" method="post" action="{{route('account.edit.form', $user->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="name" class="form-label">Имя</label>
                        <input name="name" type="text" class="form-control " id="name" value="{{$user->name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input name="surname" type="text" class="form-control" id="surname" value="{{$user->surname}}"
                        >
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Адрес</label>
                        <input name="address" type="text" class="form-control" id="name" value="{{$user->address}}">
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Город</label>
                        <input name="city" type="text" class="form-control" id="surname" value="{{$user->city}}"
                        >
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Телефон</label>
                        <input name="phone" type="text" class="form-control" id="name" value="{{$user->phone}}">
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Почтовый индекс</label>
                        <input name="postal_code" type="text" class="form-control" id="surname"
                               value="{{$user->postal_code}}"
                        >
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{$user->email}}"
                               placeholder="test@gmail.com">
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Пароль</label>
                        <input name="password" type="password" class="form-control" id="password"
                               placeholder="password">
                    </div>

                    <div class="col-12 mb-5">
                        <button type="submit" class="btn  fs-4" style=" background: #d10024; color: #fff;">Обновить
                            данные
                        </button>
                    </div>
                </form>

            </div>

            <div class="block-cards-z p-3">
                <h2 class="text-center mb-5">Мои заказы</h2>
                <div class="cards-z">

                    @foreach($orders as $order)

                        <div class="card-z">
                            <p class="card-z-title">Номер заказа:<strong> № - {{$order->order_number}}</strong> </p>
                            <p class="card-z-text">Общая сумма заказа: {{$order->total_price}} cом</p>
                            <p class="card-z-text">Имя заказчика: {{$order->first_name}}</p>
                            <p class="card-z-text">Адрес доставки: {{$order->city}} - {{$order->address}} </p>
                            <p class="card-z-text">
                                Статус заявки:
                                @if($order->status === 'в обработке')
                                    <span style="color: orange;">{{$order->status}}</span>
                                @elseif($order->status === 'в исполнении')
                                    <span style="color: blue;">{{$order->status}}</span>
                                @elseif($order->status === 'выполнен')
                                    <span style="color: green;">{{$order->status}}</span>
                                @else
                                    <span>{{$order->status}}</span>
                                @endif
                            </p>


                            <div>
                                <h4>Список товара</h4>
                                <ol class="card-z-list">
                                    @foreach($order->items as $item)
                                        <li>
                                            {{ $item->product_name }} — {{ $item->quantity }} шт. × {{ $item->price }} сом = {{ $item->total }} сом
                                        </li>
                                    @endforeach
                                </ol>

                            </div>
                            <div class="cards-z-btn">
                                <form action="{{ route('account.delete.form', ['form' => $order->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn primary-btn fs-5">Удалить заказ</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>

    </div>


@endsection
