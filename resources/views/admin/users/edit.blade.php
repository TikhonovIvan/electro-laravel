@extends('admin.layouts.default')


@section('content')

    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Редактировать пользователя</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item">Редактировать</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-12 col-md-6">
                    <div class="card card-warning card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Редактировать пользователя</div>
                        </div>
                        <form method="post" action="{{route('admin.user.update', ['id' => $user->id])}}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Имя</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" id="inputEmail3" value="{{$user->name}}">
                                    </div>
                                </div>

                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Фамилия</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="surname" class="form-control" id="inputEmail3" value="{{$user->surname}}">
                                    </div>
                                </div>

                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Адрес</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="address" class="form-control" id="inputEmail3" value="{{$user->address}}">
                                    </div>
                                </div>

                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Город</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="city" class="form-control" id="inputEmail3"  value="{{$user->city}}">
                                    </div>
                                </div>

                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Телефон</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" class="form-control" id="inputEmail3" value="{{$user->phone}}">
                                    </div>
                                </div>

                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Почтовый индекс</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="postal_code" class="form-control" id="inputEmail3" value="{{$user->postal_code}}">
                                    </div>
                                </div>

                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" id="inputEmail3" value="{{$user->email}}">
                                    </div>
                                </div>

                                <div class="row mb-3"><label for="inputEmail3"  class="col-sm-2 col-form-label">Пароль</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control" id="inputEmail3">
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Редактировать</button>

                            </div> <!--end::Footer-->
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
