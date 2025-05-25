@extends('layouts.app')


@section('title' , 'Все категории')

@section('content')
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Все категории</a></li>
                        <li class="active">Ноутбук( 22 результат)</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Категории</h3>
                        <div class="checkbox-filter">
                            <div class="input-checkbox">
                                <input type="checkbox" id="category-1" />
                                <label for="category-1">
                                    <span></span>
                                    Ноутбуки
                                    <small>(120)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-2" />
                                <label for="category-2">
                                    <span></span>
                                    Смартфоны
                                    <small>(740)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-3" />
                                <label for="category-3">
                                    <span></span>
                                    Камеры
                                    <small>(1450)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-4" />
                                <label for="category-4">
                                    <span></span>
                                    Аксессуары
                                    <small>(578)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Цена</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number"  />
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number"  />
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Бренд</h3>
                        <div class="checkbox-filter">
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-1" />
                                <label for="brand-1">
                                    <span></span>
                                    SAMSUNG
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-2" />
                                <label for="brand-2">
                                    <span></span>
                                    LG
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-3" />
                                <label for="brand-3">
                                    <span></span>
                                    SONY
                                    <small>(755)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Лидер продаж</h3>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('assets/img/product01.png')}}" alt="" />
                            </div>
                            <div class="product-body">
                                <p class="product-category">Категория</p>
                                <h3 class="product-name">
                                    <a href="#">Ноутбук Asus A12</a>
                                </h3>
                                <h4 class="product-price">
                                    980.00 сом <del class="product-old-price">990.00 сом</del>
                                </h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('assets/img/product02.png')}}" alt="" />
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name">
                                    <a href="#">product name goes here</a>
                                </h3>
                                <h4 class="product-price">
                                    $980.00 <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{asset('assets/img/product03.png')}}" alt="" />
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name">
                                    <a href="#">product name goes here</a>
                                </h3>
                                <h4 class="product-price">
                                    $980.00 <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="wrapper-row-cards">
                        <!-- product -->
                        <div class="">
                            <div class="product card-info">
                                <div class="product-img">
                                    <img src="{{asset('assets/img/product01.png')}}" alt="Ноутбук Asus A15" />
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">Новинка</span>
                                    </div>
                                </div>

                                <div class="product-body">
                                    <p class="product-category">Ноутбук</p>
                                    <h3 class="product-name">
                                        <a href="product.html">Ноутбук Asus A15</a>
                                    </h3>
                                    <h4 class="product-price">
                                        <span class="price-value">98000</span>.00 сом
                                        <del class="product-old-price">99000.00 сом</del>
                                    </h4>
                                    <div class="product-rating">
                                        <div class="d-none">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="product-btns">
                                        <button class="add-to-wishlist d-none">
                                            <i class="fa fa-heart-o"></i>
                                            <span class="tooltipp">Избранное</span>
                                        </button>

                                        <button class="quick-view">
                                            <a href="product.html"><i class="fa fa-eye"></i></a>
                                            <span class="tooltipp">Посмотреть</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="add-to-cart">
                                    <button
                                        class="add-to-cart-btn"
                                        data-id="1"
                                        data-name="Ноутбук Asus A15"
                                        data-price="98000"
                                        data-img="./img/product01.png"
                                    >
                                        <i class="fa fa-shopping-cart"></i> В карзину
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        <!-- product -->
                        <div class="">
                            <div class="product card-info">
                                <div class="product-img">
                                    <img src="{{asset('assets/img/product01.png')}}" alt="Ноутбук Asus A15" />
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">Новинка</span>
                                    </div>
                                </div>

                                <div class="product-body">
                                    <p class="product-category">Ноутбук</p>
                                    <h3 class="product-name">
                                        <a href="product.html">Ноутбук Asus A15</a>
                                    </h3>
                                    <h4 class="product-price">
                                        <span class="price-value">98000</span>.00 сом
                                        <del class="product-old-price">99000.00 сом</del>
                                    </h4>
                                    <div class="product-rating">
                                        <div class="d-none">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="product-btns">
                                        <button class="add-to-wishlist d-none">
                                            <i class="fa fa-heart-o"></i>
                                            <span class="tooltipp">Избранное</span>
                                        </button>

                                        <button class="quick-view">
                                            <a href="product.html"><i class="fa fa-eye"></i></a>
                                            <span class="tooltipp">Посмотреть</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="add-to-cart">
                                    <button
                                        class="add-to-cart-btn"
                                        data-id="1"
                                        data-name="Ноутбук Asus A15"
                                        data-price="98000"
                                        data-img="./img/product01.png"
                                    >
                                        <i class="fa fa-shopping-cart"></i> В карзину
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        <!-- product -->
                        <div class="">
                            <div class="product card-info">
                                <div class="product-img">
                                    <img src="{{asset('assets/img/product01.png')}}" alt="Ноутбук Asus A15" />
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">Новинка</span>
                                    </div>
                                </div>

                                <div class="product-body">
                                    <p class="product-category">Ноутбук</p>
                                    <h3 class="product-name">
                                        <a href="product.html">Ноутбук Asus A15</a>
                                    </h3>
                                    <h4 class="product-price">
                                        <span class="price-value">98000</span>.00 сом
                                        <del class="product-old-price">99000.00 сом</del>
                                    </h4>
                                    <div class="product-rating">
                                        <div class="d-none">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="product-btns">
                                        <button class="add-to-wishlist d-none">
                                            <i class="fa fa-heart-o"></i>
                                            <span class="tooltipp">Избранное</span>
                                        </button>

                                        <button class="quick-view">
                                            <a href="product.html"><i class="fa fa-eye"></i></a>
                                            <span class="tooltipp">Посмотреть</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="add-to-cart">
                                    <button
                                        class="add-to-cart-btn"
                                        data-id="1"
                                        data-name="Ноутбук Asus A15"
                                        data-price="98000"
                                        data-img="./img/product01.png"
                                    >
                                        <i class="fa fa-shopping-cart"></i> В карзину
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        <!-- product -->
                        <div class="">
                            <div class="product card-info">
                                <div class="product-img">
                                    <img src="{{asset('assets/img/product01.png')}}" alt="Ноутбук Asus A15" />
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">Новинка</span>
                                    </div>
                                </div>

                                <div class="product-body">
                                    <p class="product-category">Ноутбук</p>
                                    <h3 class="product-name">
                                        <a href="product.html">Ноутбук Asus A15</a>
                                    </h3>
                                    <h4 class="product-price">
                                        <span class="price-value">98000</span>.00 сом
                                        <del class="product-old-price">99000.00 сом</del>
                                    </h4>
                                    <div class="product-rating">
                                        <div class="d-none">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>

                                    <div class="product-btns">
                                        <button class="add-to-wishlist d-none">
                                            <i class="fa fa-heart-o"></i>
                                            <span class="tooltipp">Избранное</span>
                                        </button>

                                        <button class="quick-view">
                                            <a href="product.html"><i class="fa fa-eye"></i></a>
                                            <span class="tooltipp">Посмотреть</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="add-to-cart">
                                    <button
                                        class="add-to-cart-btn"
                                        data-id="1"
                                        data-name="Ноутбук Asus A15"
                                        data-price="98000"
                                        data-img="./img/product01.png"
                                    >
                                        <i class="fa fa-shopping-cart"></i> В карзину
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                    </div>
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <ul class="store-pagination">
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

@endsection
