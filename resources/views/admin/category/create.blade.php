@extends('admin.layouts.default')


@section('content')

        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Создать новую категорию</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Категория</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Категория</a></li>
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
                            <div class="card-title">Новая категория</div>
                        </div>

                        <form method="post" action="{{route('admin.category.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-3"> <label for="input-name" class="col-sm-2 col-form-label">Название</label>
                                    <div class="col-sm-10"> <input type="text" name="name" class="form-control" id="input-name" value="{{old('name')}}">  </div>
                                </div>
                                <div class="row mb-3"> <label for="input-description" class="col-sm-2 col-form-label">Описание</label>
                                    <div class="col-sm-10"> <input type="text" name="description" class="form-control" id="input-description" value="{{old('description')}}"> </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Создать</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
