@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Quản lý thuộc tính</h3>
        </div>
    </div>
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Danh sách</h6>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">#</th>
                        <th scope="col" class="border-0">Phân loại</th>
                        <th scope="col" class="border-0">Tên ngành nghề</th>
                        <th scope="col" class="border-0">Thời gian tạo</th>
                        <th scope="col" class="border-0">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($attributes as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td><span class="badge {{ $item->getType($item->a_type)['class'] }}">{{ $item->getType($item->a_type)['name'] }}</span></td>
                            <td>{{ $item->a_name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">edit</i></a>
                                <a href="" class="btn btn-sm btn-outline-primary">
                                    <i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

