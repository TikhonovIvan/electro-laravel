
@extends('layouts.app')


@section('title' , 'Корзина')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Продукт</th>
                <th scope="col">Цена</th>
                <th scope="col">Количество</th>
                <th scope="col">Итог</th>
            </tr>
            </thead>

            <tbody>
            <tr></tr>
            </tbody>
        </table>
        <a href="{{route('checkout.create')}}" class="btn btn-danger fs-3 px-4 rounded-5">Перейти к оформлению</a>
    </div>

@endsection
