@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Quản lý ngành nghề</h3>
        </div>
    </div>
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Danh sách</h6>
            </div>
            <div class="p-2">
                <a href="{{ route('get_admin.career.create') }}" class="btn btn-info">Thêm ngành nghề</a>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">#</th>
                        <th scope="col" class="border-0">Hình ảnh</th>
                        <th scope="col" class="border-0">Tên ngành nghề</th>
                        <th scope="col" class="border-0">Thời gian tạo</th>
                        <th scope="col" class="border-0">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($careers as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                           <img src="{{ pare_url_file($item->c_avatar) }}" alt="" style="width: 60px;">
                        </td>
                        <td>{{ $item->c_name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <a href="{{ route('get_admin.career.update', $item->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="material-icons">edit</i></a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="{{ route('get_admin.career.delete', $item->id) }}" class="btn btn-outline-primary btn-sm">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
