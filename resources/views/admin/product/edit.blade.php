@extends('admin.layouts.default')


@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Редактирование</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Склад</a></li>
                        <li class="breadcrumb-item">Редактирование</li>
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
                        <div class="card-title">Отредактировать товар</div>
                    </div>
                    @if ($product->images->count())
                        <div class="mb-3">
                            <label class="form-label">Текущие изображения</label>
                            <div class="row">
                                @foreach ($product->images as $image)
                                    <div class="col-md-3 mb-3 text-center">
                                        <img src="{{ asset('uploads/' . $image->image_path) }}" style="width: 300px;" class="img-thumbnail mb-2">

                                        <form action="{{ route('admin.product.image.delete', $image->id) }}" method="POST" onsubmit="return confirm('Удалить это изображение?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <form class="needs-validation" method="post" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Название товар</label>
                                    <input type="text" name="name" class="form-control" id="validationCustom01"
                                           required="" value="{{ $product->name }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Артикул товара</label>
                                    <input type="text" name="sku" class="form-control" id="validationCustom02"
                                           required=""  value="{{ $product->sku }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Цена за штуку</label>
                                    <input type="text" name="price" class="form-control" id="validationCustom02"
                                           required="" value="{{ $product->price }}">

                                </div>
                                <div class="col-md-6"><label for="validationCustomUsername" class="form-label">Краткое
                                        описание</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="short_description" class="form-control"
                                               id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                                               required=""  value="{{ $product->short_description }}">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Скидка товара</label>
                                    <input type="text" name="discount" class="form-control" id="validationCustom03"
                                           required=""  value="{{ $product->discount }}">
                                </div>

                                <div class="col-md-6 d-none">
                                    <label for="validationCustom04" class="form-label">Цвет товара</label>
                                    <select class="form-select" id="validationCustom04" required name="color">
                                        <option disabled {{ $product->color ? '' : 'selected' }}>Выберите цвет</option>
                                        <option value="Синий" {{ $product->color === 'Синий' ? 'selected' : '' }}>Синий</option>
                                        <option value="Красный" {{ $product->color === 'Красный' ? 'selected' : '' }}>Красный</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom05" class="form-label">Кол-во на складе</label>
                                    <input type="number" name="stock" class="form-control" id="validationCustom05"
                                           required="" value="{{ $product->stock }}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Категория</label>
                                    <select class="form-select" id="validationCustom04" name="category_id" required>
                                        <option disabled {{ old('category_id', $product->category_id) ? '' : 'selected' }}>Выберите категорию</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>





                                <div class=" mb-3">
                                    <label for="validationCustom04" class="form-label">Фото продукта</label>
                                    <br>

                                    <input type="file" class="form-control" name="images[]" id="inputGroupFile02" multiple accept="image/*">
                                </div>
                                <style>
                                    .cke_notifications_area{
                                        display: none;
                                    }
                                </style>
                                <div class="col-md-8">
                                    <label for="content" class="form-label">Описание продукта</label>
                                    <textarea class="form-control ckeditor" name="long_description" id="content" cols="30" rows="10">{{ $product->long_description }}</textarea>

                                </div>



                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning" type="submit">Редактировать</button>
                        </div>

                    </form>


                </div>

            </div>
        </div>
    </div>


@endsection
