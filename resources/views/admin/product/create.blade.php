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
                        <li class="breadcrumb-item"><a href="{{route('admin.products.index')}}">Склад</a></li>
                        <li class="breadcrumb-item">Создание</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">

                <div class="card card-warning card-outline mb-4"> <!--begin::Header-->
                    <div class="card-header">
                        <div class="card-title">Добавить новый товар</div>
                    </div>
                    <form class="needs-validation" method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="validationCustom01" class="form-label">Название товар</label>
                                    <input type="text" name="name" class="form-control" id="validationCustom01"
                                           required="" value="{{old('name')}}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Цена за штуку</label>
                                    <input type="number" name="price" class="form-control" id="validationCustom02"
                                           required=""  value="{{old('price')}}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom02" class="form-label">Артикул товара</label>
                                    <input type="text" name="sku" class="form-control" id="validationCustom02"
                                           required="" value="{{old('sku')}}">

                                </div>
                                <div class="col-md-6"><label for="validationCustomUsername" class="form-label">Краткое
                                        описание</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="short_description" class="form-control"
                                               id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                                               required="" value="{{old('short_description')}}" >

                                    </div>
                                </div> <!--end::Col--> <!--begin::Col-->
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Скидка товара</label>
                                    <input type="number" name="discount" class="form-control" id="validationCustom03"
                                           required="" value="{{old('discount')}}">
                                </div>
                                <div class="col-md-6 d-none">
                                    <label for="validationCustom04" class="form-label">Цвет товара</label>
                                    <input value=" ">
                                    <select class="form-select" id="validationCustom04" required="" name="color" >
{{--                                        <option selected="" disabled=""  >Выберите цвет</option>--}}
                                        <option value="Красный" selected>Красный</option>
                                    </select>

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom05" class="form-label">Кол-во на складе</label>
                                    <input type="number" name="stock" class="form-control" id="validationCustom05"
                                           required="" value="{{old('stock')}}">

                                </div>
                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">Категория</label>
                                    <select class="form-select" id="validationCustom04" name="category_id" required>
                                        <option selected disabled>Выберите категорию</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                    <textarea class="form-control ckeditor" name="long_description" id="content" cols="30" rows="10">{{old('long_description')}}"</textarea>

                                </div>



                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning" type="submit">Добавить</button>
                        </div>
                    </form>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (() => {
                            "use strict";

                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            const forms =
                                document.querySelectorAll(".needs-validation");

                            // Loop over them and prevent submission
                            Array.from(forms).forEach((form) => {
                                form.addEventListener(
                                    "submit",
                                    (event) => {
                                        if (!form.checkValidity()) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }

                                        form.classList.add("was-validated");
                                    },
                                    false
                                );
                            });
                        })();
                    </script>
                </div>

            </div>
        </div>
    </div>

@endsection
