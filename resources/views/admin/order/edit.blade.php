@extends('admin.layouts.default')


@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Редактирование</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.orders.index')}}">Заказы</a></li>
                        <li class="breadcrumb-item">Редактирование</li>
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
                        <div class="card-title">Отредактировать заказ: <strong>№ - {{$order->order_number}}</strong>
                        </div>
                    </div>

                    <form class="needs-validation" method="post" action="{{ route('admin.order.update', $order->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Имя</label>
                                    <input type="text" name="first_name" class="form-control" id="validationCustom01"
                                            value="{{ $order->first_name }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Фамилия</label>
                                    <input type="text" name="last_name" class="form-control" id="validationCustom01"
                                            value="{{ $order->last_name }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Телефон</label>
                                    <input type="text" name="phone" class="form-control" id="validationCustom02"
                                            value="{{ $order->phone }}">

                                </div>
                                <div class="col-md-6"><label for="validationCustomUsername" class="form-label">Адрес
                                        доставки</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="address" class="form-control"
                                               id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                                                value="{{ $order->address}}">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Статус заявки</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="gridRadios1"
                                                       value="в обработке" {{ $order->status === 'в обработке' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="gridRadios1">
                                                    В обработке
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="gridRadios2"
                                                       value="в исполнении" {{ $order->status === 'в исполнении' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="gridRadios2">
                                                    В исполнении
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="gridRadios3"
                                                       value="выполнен" {{ $order->status === 'выполнен' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Выполнен
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning" type="submit">Редактировать</button>
                        </div>

                    </form>


                </div>

            </div>
        </div>
    </div>

@endsection
