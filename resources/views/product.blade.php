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
                    @foreach($product->images as $image)
                        <div class="product-preview">
                            <img src="{{ asset('uploads/' . $image->image_path) }}" alt="{{ $product->name }}" />
                        </div>
                    @endforeach
                    @if($product->images->isEmpty())
                        <div class="product-preview">
                            <img src="{{ asset('img/no-image.png') }}" alt="Нет изображения" />
                        </div>
                    @endif
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2 col-md-pull-5">
                <div id="product-imgs">
                    @foreach($product->images as $image)
                        <div class="product-preview">
                            <img src="{{ asset('uploads/' . $image->image_path) }}" alt="{{ $product->name }}" />
                        </div>
                    @endforeach
                    @if($product->images->isEmpty())
                        <div class="product-preview">
                            <img src="{{ asset('img/no-image.png') }}" alt="Нет изображения" />
                        </div>
                    @endif
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{$product->name}}</h2>

                    <div>
                        <h3 class="product-price">
                            {{ $product->price - $product->discount }} сом <del class="product-old-price">{{$product->price }} сом</del>
                        </h3>
                        <span class="product-available">В наличии {{$product->stock}} шт.</span>
                    </div>
                    <p>
                        {{$product->short_description}}
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
                            data-id="{{ $product->id }}"
                            data-name="{{ $product->name }}"
                            data-price="{{ $product->price - $product->discount }}"
                            data-img="{{ $product->images->first() ? asset('uploads/' . $product->images->first()->image_path) : asset('img/no-image.png') }}"

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

                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        {!! $product->long_description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->


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




@endsection
