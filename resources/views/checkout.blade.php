
@extends('layouts.app')


@section('title' , 'Оформить заказ')

@section('content')

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <form action="{{ route('checkout.store') }}" method="post">
                @csrf

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
                            name="first_name"
                            placeholder="Имя"
                            value="{{$user->name}}"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            class="input"
                            type="text"
                            name="last_name"
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
                </div>
                <!-- /Billing Details -->

                <!-- Order notes -->
                <div class="order-notes">
                <textarea
                    class="input"
                    placeholder="Описание к заказу"
                    name="desc" required
                ></textarea>
                </div>
                <!-- /Order notes -->
            </div>

            <!-- Тут начинается  передача данных с корзины  -->
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
                        <input type="radio" name="payment" id="payment-1"  required/>
                        <label for="payment-1">
                            <span></span>
                            Прямой банковский перевод
                        </label>
                        <div class="caption">
                            <p>
                               Сотрудник свяжется с вами для подтверждения заказа и оплаты
                            </p>
                        </div>
                    </div>

                </div>
                <div class="input-checkbox">
                    <input type="checkbox" id="terms" name="terms" required/>
                    <label for="terms">
                        <span></span>
                        Я прочитал(а) и принимаю условия
                    </label>
                </div>
                <input type="hidden" name="products" id="products-json">
                <button type="submit" class="primary-btn order-submit">Разместить заказ</button>
            </div>
            <!-- /Order Details -->

                <script>
                    /*Теперь при отправке формы products попадёт в контроллер как JSON-массив.*/
                    document.querySelectorAll('form').forEach(form => {
                        form.addEventListener('submit', function(e) {
                            const productsInput = document.getElementById('products-json');
                            if (productsInput) {
                                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                                productsInput.value = JSON.stringify(cart);
                            }
                        });
                    });

                </script>
            </form>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@endsection
