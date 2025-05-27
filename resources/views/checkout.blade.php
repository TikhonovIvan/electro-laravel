
@extends('layouts.app')


@section('title' , 'Оформить заказ')

@section('content')

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <form action="" method="post">
            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Адрес для выставления счета</h3>
                    </div>



                    <div class="form-group">
                        <input
                            class="input"
                            type="text"
                            name="first-name"
                            placeholder="Имя"
                            value="{{$user->name}}"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="input"
                            type="text"
                            name="last-name"
                            placeholder="Фамилия"
                            value="{{$user->surname}}"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="input"
                            type="email"
                            name="email"
                            placeholder="Email"
                            value="{{$user->email}}"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="input"
                            type="text"
                            name="address"
                            placeholder="Адрес"
                            value="{{$user->address}}"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="input"
                            type="text"
                            name="city"
                            placeholder="Город"
                            value="{{$user->city}}"

                        />
                    </div>

                    <div class="form-group">
                        <input
                            class="input"
                            type="text"
                            name="postal_code"
                            placeholder="Почтовый индекс"
                            value="{{$user->postal_code}}"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="input"
                            type="tel"
                            name="phone"
                            placeholder="Телефон"
                            value="{{$user->phone}}"
                        />
                    </div>
                    <div class="form-group">
                        <div class="input-checkbox">
                            <input type="checkbox" id="create-account" />
                            <label for="create-account">
                                <span></span>
                                Создать аккаунт?
                            </label>
                            <div class="caption">
                                <p>Укажите пароль для регистрации</p>
                                <input
                                    class="input"
                                    type="password"
                                    name="password"
                                    placeholder="Пароль"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Billing Details -->

                <!-- Order notes -->
                <div class="order-notes">
                <textarea
                    class="input"
                    placeholder="Описание к заказу"
                    name="desc"
                ></textarea>
                </div>
                <!-- /Order notes -->
            </div>

            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Ваш заказ</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>Продукт</strong></div>
                        <div><strong>ОБЩИЙ</strong></div>
                    </div>
                    <div class="order-products" id="checkout-products">
                        <div class="order-col">
                            <div>-</div>
                            <div>0.00 сом</div>
                        </div>
                        <div class="order-col">
                            <div>-</div>
                            <div>0.00 сом</div>
                        </div>
                    </div>
                    <div class="order-col">
                        <div>Перевозки</div>
                        <div><strong>Бесплатно</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>Общий</strong></div>
                        <div>
                            <strong class="order-total" id="checkout-total"
                            >0.00 сом</strong
                            >
                        </div>
                    </div>
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-1" />
                        <label for="payment-1">
                            <span></span>
                            Прямой банковский перевод
                        </label>
                        <div class="caption">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua.
                            </p>
                        </div>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2" />
                        <label for="payment-2">
                            <span></span>
                            Оплата чеком
                        </label>
                        <div class="caption">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="input-checkbox">
                    <input type="checkbox" id="terms" />
                    <label for="terms">
                        <span></span>
                        Я прочитал(а) и принимаю условия
                    </label>
                </div>
                <a href="#" class="primary-btn order-submit">Разместить заказ</a>
            </div>
            <!-- /Order Details -->

            </form>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@endsection
