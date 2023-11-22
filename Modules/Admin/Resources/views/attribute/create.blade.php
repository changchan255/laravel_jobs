@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Thêm thuộc tính</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Thêm thuộc tính</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <form action="" method="POST" style="text-align: left" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên thuộc tính</label>
                                            <input type="text" class="form-control" value="{{ $attributes->a_name ?? '' }}" name="a_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phân loại</label>
                                            <select name="a_type" class="form-control" id="">
                                                <option value="1" {{ $attributes->a_type ?? 0 == 1 ? "selected" : "" }}>Kinh nghiệm</option>
                                                <option value="2" {{ $attributes->a_type ?? 0 == 2 ? "selected" : "" }}>Cấp bậc</option>
                                                <option value="3" {{ $attributes->a_type ?? 0 == 3 ? "selected" : "" }}>Hình thức làm việc</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <button class="mb-2 btn btn-primary mr-2" title="submit">Xử lý</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
@stop

