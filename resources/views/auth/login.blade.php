@extends('layouts.app')

@section('title', 'Вход')

@section('content')
    <div class="container">



        <div class="login-form">

            <form method="post" action="{{route('login.auth')}}">
                @csrf

                <h2 class="text-center">Добро пожаловать</h2>
                <div class="wrapper-form-block">
                    <div class="form-input-block">
                        <label> Email</label>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                    </div>
                    <div class="form-input-block">
                        <label> Пароль</label>
                        <input type="password" name="password" placeholder="Пароль" />
                    </div>

                    <div class="form-input-block">
                        <button type="submit">Войти</button>
                    </div>

                    <div class="form-input-block">
                        <p class="text-center mt-5">
                            У меня нет
                            <a href="{{route('register.create')}}"><span>аккаунта!</span> </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
