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
                <h3 >Аккаунт пользователя</h3>

                <form class="row g-3" method="post" action="{{route('account.edit.form', $user->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="name" class="form-label" >Имя</label>
                        <input name="name" type="text" class="form-control " id="name"  value="{{$user->name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Фамилия</label>
                        <input name="surname" type="text" class="form-control" id="surname" value="{{$user->surname}}"
                               >
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Адрес</label>
                        <input name="address" type="text" class="form-control" id="name" value="{{$user->address}}" >
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Город</label>
                        <input name="city" type="text" class="form-control" id="surname" value="{{$user->city}}"
                        >
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Телефон</label>
                        <input name="phone" type="text" class="form-control" id="name" value="{{$user->phone}}" >
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Почтовый индекс</label>
                        <input name="postal_code" type="text" class="form-control" id="surname" value="{{$user->postal_code}}"
                        >
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email"  value="{{$user->email}}"
                               placeholder="test@gmail.com" >
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Пароль</label>
                        <input name="password" type="password" class="form-control" id="password"
                               placeholder="password">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn  fs-4" style=" background: #d10024; color: #fff;">Обновить данные</button>
                    </div>
                </form>

            </div>




        </div>

    </div>
@endsection
