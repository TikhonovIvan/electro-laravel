@extends('admin.layouts.default')


@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">Информация о товаре</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Склад</a></li>
                        <li class="breadcrumb-item">Информация о товаре</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">

                <div class="card card-warning card-outline mb-4">
                    <div class="card-header">
                        <div class="card-title">Информация о товаре</div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            {{-- Левая колонка: изображения --}}
                            <div class="col-md-6">
                                <h5>Фотографии:</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ($product->images as $image)
                                        <img src="{{ asset('uploads/' . $image->image_path) }}" alt="Product Image" style="width: 300px;" class="img-thumbnail">
                                    @endforeach
                                </div>
                            </div>

                            {{-- Правая колонка: информация о товаре --}}
                            <div class="col-md-6">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Название</th>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Цена</th>
                                        <td>{{ $product->price }} сом</td>
                                    </tr>
                                    <tr>
                                        <th>Скидка</th>
                                        <td>{{ $product->discount }} %</td>
                                    </tr>
                                    <tr>
                                        <th>Цвет</th>
                                        <td>{{ $product->color }}</td>
                                    </tr>
                                    <tr>
                                        <th>Остаток</th>
                                        <td>{{ $product->stock }} шт.</td>
                                    </tr>
                                    <tr>
                                        <th>Категория</th>
                                        <td>{{ $product->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Краткое описание</th>
                                        <td>{{ $product->short_description }}</td>
                                    </tr>

                                </table>


                            </div>
                            <div class="col-12 mt-5">
                                <h5>Полное описание</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    {!!  $product->long_description  !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection
