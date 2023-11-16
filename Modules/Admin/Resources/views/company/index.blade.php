@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Quản lý công ty</h3>
        </div>
    </div>
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Danh sách</h6>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <div class="p-2">
                    <form action="{{ route('get_admin.company.index') }}" method="get" class="form-inline">
                        <input type="text" class="form-control" placeholder="Tên công ty" name="search" value="{{ isset($query['search']) ? $query['search'] : '' }}">
                        <button type="submit" value="search" class="btn btn-success" style="margin-left: 5px">Tìm kiếm</button>
                    </form>
                </div>
                <table class="table mb-0">
                    <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">#</th>
                        <th scope="col" class="border-0">Họ tên</th>
                        <th scope="col" class="border-0">Email</th>
                        {{--                        <th scope="col" class="border-0">Trạng thái</th>--}}
                        <th scope="col" class="border-0">Số điện thoại</th>
                        <th scope="col" class="border-0">Thời gian</th>
                        <th scope="col" class="border-0">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies ?? [] as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <a href="">{{ $item->c_name }}</a>
                            </td>
                            <td>{{ $item->c_email }}</td>
                            {{--                            <td>--}}
                            {{--                                <span class="{{ $item->getStatus($item->j_status)['class-text'] }}">{{ $item->getStatus($item->j_status)['name'] }}</span>--}}
                            {{--                            </td>--}}
                            <td>{{ $item->c_phone ?? "N/A"}}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>
                                <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="{{ route('get_admin.company.delete', $item->id) }}"  class="btn btn-outline-primary btn-sm">
                                    <i class="material-icons">delete</i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $companies->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </div>
    </div>
@stop


