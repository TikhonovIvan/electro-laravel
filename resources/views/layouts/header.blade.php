<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left text-center ">
                <li>
                    <a href="#"><i class="fa fa-phone"></i> +996 555-00-00-00</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope-o"></i> electro@email.com</a>
                </li>
                <li>
                    <a href="#"
                    ><i class="fa fa-map-marker"></i> г.Бишкек ул.Турусбекова 123</a
                    >
                </li>
            </ul>
            <ul class="header-links pull-right text-center ">


                <li class="d-flex align-items-center flex-wrap  justify-content-center gap-2 ">

                    @auth()
                        <a href="#" class="me-4">{{auth()->user()->email}}</a>
                        <i class="fa fa-user-o"></i>
                    @endauth

                        <div class="dropdown">
                            <button
                                class="btn btn-secondary dropdown-toggle"
                                type="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Мой аккаунт
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">


                                @auth
                                <li>
                                    <a class="dropdown-item" href="{{route('account.form')}}">Аккаунт</a>
                                </li>

                                    @cannot('user')
                                <li>
                                    <a class="dropdown-item" href="{{route('admin.main.index')}}">Админ панель</a>
                                </li>
                                    @endcannot
                                <li><a class="dropdown-item" href="{{route('logout')}}">Выход</a></li>

                                @else
                                    <li><a class="dropdown-item" href="{{route('login.form')}}">Вход</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('register.create')}}"
                                        >Регистрация</a
                                        >
                                    </li>
                                @endauth
                            </ul>
                        </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="wrapper-row">
                <!-- LOGO -->
                <div class="">
                    <div class="header-logo">
                        <a href="{{route('home')}}" class="logo">
                            <img src="{{ asset('assets/img/logo.png') }}" alt=""/>
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="search-bar">
                    <div class="header-search">
                        <form>
                            <input class="input" placeholder="Найти товар..."/>
                            <button class="search-btn">Найти</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div class="d-none">
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Избранные</span>
                                <div class="qty">2</div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->

                        <div class="dropdown cart-dropdown-wrapper">
                            <a class="dropdown-toggle" href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Карзина</span>
                                <div class="qty" id="cart-total-qty">0</div>
                            </a>

                            <div class="cart-dropdown">
                                <!-- Список товаров -->
                                <div class="cart-list" id="cart-list">
                                    <!-- Пример товара будет добавляться через JS -->
                                </div>

                                <!-- Сводка -->
                                <div class="cart-summary">
                                    <small
                                    >Выбрано
                                        <span id="cart-item-count">0</span> элемент(ов)</small
                                    >
                                    <h5>Итог: <span id="cart-total-price">0</span> сом</h5>
                                </div>

                                <!-- Кнопки управления -->
                                <div class="cart-btns">
                                    <a href="{{route('store.cart')}}">Посмотреть корзину</a>
                                    <a href="{{route('checkout.index')}}">
                                        Оформить <i class="fa fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- /Cart -->

                        <!-- Menu Toogle -->

                        <div class="menu-toggle">
                            <a href="#"><i class="fa fa-bars"></i> <span>Меню</span></a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <div class="container">
        <div id="responsive-nav">
            <ul class="main-nav nav">
                <ul class="main-nav nav">
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li><a href="{{ route('category.index') }}">Категории</a></li>
                    @foreach($categories as $category)
                        <li><a href="">{{ $category->name }}</a></li>
                    @endforeach

                </ul>

            </ul>
        </div>
    </div>
</nav>
<!-- /NAVIGATION -->



<div class="container mt-5  ">
    <div class="row d-flex justify-content-center">
        <div class="col-6 text-center">

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible  show" role="alert">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li> <strong>{{ $error }}</strong> </li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible  show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
</div>
