@extends('admin.layouts.default')


@section('content')

    <div class="col-6">

        <div class="card mb-4">
            <h1 class="card-title p-2">Категории</h1><br>
            <div class="card-header">

                <a href="#" class="btn btn-primary mt-3">Добавить</a>
            </div> <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Название</th>

                        <th style="width: 100px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="align-middle">
                        <td>1.</td>
                        <td>Ноутбуки</td>
                        <td class="d-flex gap-2"><a href="" class="btn btn-info"><i class="bi bi-pencil "></i></a>
                            <a href="" class="btn btn-danger" ><i class="bi bi-trash"></i></a></td>
                    </tr>
                    <tr class="align-middle">
                        <td>1.</td>
                        <td>Ноутбуки</td>
                        <td class="d-flex gap-2"><a href="" class="btn btn-info"><i class="bi bi-pencil "></i></a>
                            <a href="" class="btn btn-danger" ><i class="bi bi-trash"></i></a></td>
                    </tr>

                    </tbody>
                </table>
            </div> <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                </ul>
            </div>
        </div> <!-- /.card -->

    </div>

@endsection
