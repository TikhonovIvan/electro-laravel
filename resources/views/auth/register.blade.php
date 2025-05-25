@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="container">


        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert" >
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li> <strong>{{ $error }}</strong> </li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="login-form">

            <form method="post" action="{{route('register.store')}}">
                @csrf
                <h2 class="text-center">Регистрация</h2>
                <div class="wrapper-form-block">
                    <div class="form-input-block">
                        <label> Имя</label>
                        <input type="text" name="name" placeholder="Имя" value="{{ old('name') }}"  required />
                    </div>

                    <div class="form-input-block">
                        <label>Фамилия</label>
                        <input type="text" name="surname" placeholder="Фамилия"  value="{{ old('surname') }}" required />
                    </div>

                    <div class="form-input-block">
                        <label>Адрес</label>
                        <input type="text" name="address" placeholder="Адрес" value="{{ old('address') }}" required />
                    </div>
                    <div class="form-input-block">
                        <label>Город</label>
                        <input type="text" name="city" placeholder="Город" value="{{ old('city') }}" required/>
                    </div>

                    <div class="form-input-block">
                        <label>Телефон</label>
                        <input type="text" name="phone" placeholder="Телефон"value="{{ old('phone') }}" required />
                    </div>
                    <div class="form-input-block">
                        <label>Почтовый индекс</label>
                        <input type="text" name="postal_code" placeholder=" №7526941" value="{{ old('postal_code') }}" required/>
                    </div>
                    <div class="form-input-block">
                        <label> Email</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="email@gmail.com"
                            value="{{ old('email') }}" required
                        />
                    </div>
                    <div class="form-input-block">
                        <label> Пароль</label>
                        <input type="password" name="password" placeholder="Пароль" required />
                    </div>

                    <div class="form-input-block">
                        <button type="submit">Регистрация</button>
                    </div>

                    <div class="form-input-block">
                        <p class="text-center mt-5">
                            У меня есть
                            <a href="{{route('login.form')}}"><span>аккаунта!</span> </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
