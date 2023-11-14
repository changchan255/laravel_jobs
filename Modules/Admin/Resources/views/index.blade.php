@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Hệ thống quản lí website tuyển dụng</span>
            <h3 class="page-title">Xin chào {{ get_data_user('admins','name') }}!</h3>
        </div>
    </div>
@stop
