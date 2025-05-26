@extends('admin.layouts.default')


@section('content')

        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Пользователи</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item">Пользватели</li>
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
                            <a href="" class="btn btn-primary  px-5 ">Добавить</a>
                        </div> <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Адрес</th>
                                    <th>Город</th>
                                    <th>Телефон</th>
                                    <th>Почтовый индекс</th>
                                    <th>Email</th>

                                    <th style="width: 150px">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)


                                <tr class="align-middle">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->surname}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->postal_code}}</td>
                                    <td>{{$user->email}}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>

                                        <form action="" method="post">
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
                                {{ $users->links() }}
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>

@endsection
