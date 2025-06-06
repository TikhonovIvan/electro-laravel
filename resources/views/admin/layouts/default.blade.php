<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AdminLTE v4 | Dashboard</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description"
          content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
          integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
          integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
          integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
          integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
          integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/admin/css/adminlte.css')}}">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">


<div class="app-wrapper"> <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Start Navbar Links-->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i
                            class="bi bi-list"></i> </a></li>
                <li class="nav-item d-none d-md-block"><a href="{{route('admin.main.index')}}"
                                                          class="nav-link">Главная</a></li>
                <li class="nav-item d-none d-md-block"><a href="{{route('admin.users.index')}}"
                                                          class="nav-link">Пользователи</a></li>
                <li class="nav-item d-none d-md-block"><a href="{{route('admin.category.index')}}" class="nav-link">Категории</a>
                </li>
                <li class="nav-item d-none d-md-block"><a href="{{route('admin.products.index')}}" class="nav-link">Склад</a></li>
                <li class="nav-item d-none d-md-block"><a href="{{route('admin.orders.index')}}" class="nav-link">Заказы</a></li>
            </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
            <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                <li class="nav-item d-none">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i
                            class="bi bi-search"></i>
                    </a>
                </li> <!--end::Navbar Search-->
                <!--begin::Messages Dropdown Menu-->
                <li class="nav-item dropdown d-none">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i
                            class="bi bi-chat-text"></i>
                        <span class="navbar-badge badge text-bg-danger">3</span> </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"><a href="#" class="dropdown-item">
                            <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img
                                        src="{{asset('assets/admin/assets/img/user1-128x128.jpg')}}"
                                        alt="User Avatar"
                                        class="img-size-50 rounded-circle me-3"></div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                    </h3>
                                    <p class="fs-7">Call me whenever you can...</p>
                                    <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div> <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img
                                        src="{{asset('assets/admin/assets/img/user8-128x128.jpg')}}"
                                        alt="User Avatar"
                                        class="img-size-50 rounded-circle me-3"></div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-end fs-7 text-secondary"> <i
                                                class="bi bi-star-fill"></i> </span>
                                    </h3>
                                    <p class="fs-7">I got your message bro</p>
                                    <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div> <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <!--begin::Message-->
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img
                                        src="{{asset('assets/admin/assets/img/user3-128x128.jpg')}}"
                                        alt="User Avatar"
                                        class="img-size-50 rounded-circle me-3"></div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-end fs-7 text-warning"> <i
                                                class="bi bi-star-fill"></i> </span>
                                    </h3>
                                    <p class="fs-7">The subject goes here</p>
                                    <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div> <!--end::Message-->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#">
                        <i
                            class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"><span
                            class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                            <span class="float-end text-secondary fs-7">3 mins</span> </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                            <span class="float-end text-secondary fs-7">12 hours</span> </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                            <span class="float-end text-secondary fs-7">2 days</span> </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">
                            See All Notifications
                        </a>
                    </div>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                        <i
                            data-lte-icon="maximize" class="bi bi-arrows-fullscreen">

                        </i> <i data-lte-icon="minimize"
                                class="bi bi-fullscreen-exit"
                                style="display: none;"></i>
                    </a></li>
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle"
                       data-bs-toggle="dropdown"> <img
                            src="https://electro/assets/admin/assets/img/AdminLTELogo.png"
                            class="user-image rounded-circle shadow"
                            alt="User Image"> <span class="d-none d-md-inline">{{auth()->user()->email}}</span> </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                        <li class="user-header text-bg-primary"><img
                                src="https://electro/assets/admin/assets/img/AdminLTELogo.png"
                                class="rounded-circle shadow" alt="User Image">
                            <p>
                                {{auth()->user()->email}}
                                <small class="d-none">Member since Nov. 2023</small>
                            </p>
                        </li>
                        <li class="user-footer"><a href="{{route('account.form')}}" class="btn btn-default btn-flat">Аккаунт</a>
                            <a href="{{route('logout')}}"
                               class="btn btn-default btn-flat float-end">Выйти
                                </a></li> <!--end::Menu Footer-->
                    </ul>
                </li> <!--end::User Menu Dropdown-->
            </ul> <!--end::End Navbar Links-->
        </div> <!--end::Container-->
    </nav>

    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <a href="{{route('admin.main.index')}}" class="brand-link">
                <img src="{{asset('assets/admin/assets/img/AdminLTELogo.png')}}"
                     alt="AdminLTE Logo"
                     class="brand-image opacity-75 shadow"> <!--end::Brand Image-->
                <span class="brand-text fw-light">AdminLTE 4</span> <!--end::Brand Text--> </a>
        </div>
        <div class="sidebar-wrapper">
            <nav class="mt-2"> <!--begin::Sidebar Menu-->
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link">
                            <i class="nav-icon bi bi-shop"></i>
                            <p>В магазина </p>
                        </a>
                    </li>
                    <li class="nav-item"><a href="{{route('admin.main.index')}}" class="nav-link">
                            <i class=" nav-icon bi bi-house-check"></i>
                            <p>Главная</p>
                        </a>
                    </li>
                    <li class="nav-item"><a href="{{route('admin.users.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-people"></i>
                            <p>Пользователи</p>
                        </a>
                    </li>


                    <li class="nav-item"><a href="{{route('admin.category.index')}}" class="nav-link">
                            <i class=" nav-icon bi bi-card-list"></i>
                            <p>Категории</p>
                        </a>
                    </li>

                    <li class="nav-item"><a href="{{route('admin.products.index')}}" class="nav-link">
                            <i class="nav-icon bi bi-cart-plus"></i>
                            <p>Склад</p>
                        </a>
                    </li>

                    <li class="nav-item"><a href="{{route('admin.orders.index')}}" class="nav-link">
                            <i class=" nav-icon bi bi-bag-check"></i>
                            <p>Заказы</p>
                        </a>
                    </li>


                </ul>
            </nav>
        </div>
    </aside>


    <main class="app-main">
        @if ($errors->any())
            <div class="app-content mt-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif

        @if (session('success'))
            <div class="app-content mt-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif

        @yield('content')
    </main>


    <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <strong>
            Copyright &copy; 2014-2024&nbsp;
            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
    </footer> <!--end::Footer-->
</div>


<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
<!-- sortablejs -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
<!-- ChartJS -->

<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
        integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
        integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>
<!-- jsvectormap -->

<script src="{{asset('assets/admin/js/adminlte.js')}}"></script>
<script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('assets/admin/js/main.js')}}"></script>


</body>

</html>
