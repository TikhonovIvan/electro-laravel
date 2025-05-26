@extends('admin.layouts.default')


@section('content')

        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Категории</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item">Категория</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card mb-4">
                        <div class="card-header">
                            <a href="{{route('admin.category.create')}}" class="btn btn-primary  px-5 ">Добавить</a>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th>Уникально название</th>

                                    <th style="width: 150px">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)


                                <tr class="align-middle">
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>

                                        <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                                        @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Удалить категорию?')">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach


                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{ $categories->links() }}
                            </div>

                        </div> <!-- /.card-body -->



                    </div>
                </div>
            </div>
        </div>

@endsection
