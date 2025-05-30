@extends('admin.layouts.default')


@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Склад продуктов</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item">Склад</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card mb-4">
                    <div class="card-header ">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary  px-5 ">Добавить</a>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Название</th>
                                <th>Артикул</th>
                                <th>Описание</th>
                                <th>Цена</th>
                                <th>Скидка</th>
                                <th>Кол-во на складе</th>
                                <th>Категория</th>

                                <th style="width: 160px">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)


                                <tr class="align-middle">
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td>{{$product->short_description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->discount}}</td>
                                    <td>{{$product->stock}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('admin.products.edit', $product->id ) }}" class="btn btn-success"><i
                                                class="bi bi-pencil"></i></a>

                                        <a href="{{ route('admin.products.show', $product->id ) }}" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product->id ) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Удалить товар?')">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </form>


                                    </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $products->links() }}
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
