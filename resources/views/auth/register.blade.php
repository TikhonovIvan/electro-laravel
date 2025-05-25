@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="container">
        <div class="login-form">
            <form>
                <h2 class="text-center">Регистрация</h2>
                <div class="wrapper-form-block">
                    <div class="form-input-block">
                        <label> Имя</label>
                        <input type="text" name="name" placeholder="Имя" />
                    </div>

                    <div class="form-input-block">
                        <label>Фамилия</label>
                        <input type="text" name="last_name" placeholder="Фамилия" />
                    </div>

                    <div class="form-input-block">
                        <label>Адрес</label>
                        <input type="text" name="addres" placeholder="Адрес" />
                    </div>
                    <div class="form-input-block">
                        <label>Город</label>
                        <input type="text" name="city" placeholder="Город" />
                    </div>

                    <div class="form-input-block">
                        <label>Телефон</label>
                        <input type="text" name="phone" placeholder="Телефон" />
                    </div>
                    <div class="form-input-block">
                        <label>Почтовый индекс</label>
                        <input type="text" name=postal_code" placeholder=" №7526941" />
                    </div>
                    <div class="form-input-block">
                        <label> Email</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="email@gmail.com"
                        />
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
                            У меня есть
                            <a href="login.html"><span>аккаунта!</span> </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
