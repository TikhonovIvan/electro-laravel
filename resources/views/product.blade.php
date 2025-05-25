@extends('layouts.app')


@section('title' , 'Один товар')

@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{asset('assets/img/product01.png')}}" alt="" />
                    </div>

                    <div class="product-preview">
                        <img src="{{asset('assets/img/product03.png')}}" alt="" />
                    </div>

                    <div class="product-preview">
                        <img src="{{asset('assets/img/product06.png')}}" alt="" />
                    </div>

                    <div class="product-preview">
                        <img src="{{asset('assets/img/product08.png')}}" alt="" />
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2 col-md-pull-5">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="{{asset('assets/img/product01.png')}}" alt="" />
                    </div>

                    <div class="product-preview">
                        <img src="{{asset('assets/img/product03.png')}}" alt="" />
                    </div>

                    <div class="product-preview">
                        <img src="{{asset('assets/img/product06.png')}}" alt="" />
                    </div>

                    <div class="product-preview">
                        <img src="{{asset('assets/img/product08.png')}}" alt="" />
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">Ноутбук Asus A15</h2>

                    <div>
                        <h3 class="product-price">
                            980.00 сом <del class="product-old-price">990.00 сом</del>
                        </h3>
                        <span class="product-available">В наличии</span>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <div class="product-options">
                        <label>
                            Цвет
                            <select class="input-select">
                                <option value="0">Красный</option>
                            </select>
                        </label>
                    </div>

                    <div class="add-to-cart">
                        <div class="qty-label">
                            Количество
                            <div class="input-number">
                                <input type="number" value="1" class="product-qty" />
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                        <button
                            class="add-to-cart-btn"
                            data-id="1"
                            data-name="Ноутбук Asus A15"
                            data-price="98000"
                            data-img="./img/product01.png"
                        >
                            <i class="fa fa-shopping-cart"></i> Добавить в корзинку
                        </button>
                    </div>

                    <ul class="product-links">
                        <li>Category:</li>
                        <li><a href="#">Ноутбуки</a></li>
                    </ul>

                    <ul class="product-links">
                        <li>Поделиться</li>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active">
                            <a data-toggle="tab" href="#tab1">Описание</a>
                        </li>
                        <li><a data-toggle="tab" href="#tab2">Детали</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        321 Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat. Duis aute irure
                                        dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        123 Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat. Duis aute irure
                                        dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui
                                        officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

{{-- Карточки товаров --}}
@include('layouts.product-card.product-card')

@endsection
