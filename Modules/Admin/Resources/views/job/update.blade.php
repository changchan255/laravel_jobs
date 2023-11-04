@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Quản lý tin tuyển dụng</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Cập nhật job</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <select id="inputState" name="j_status" class="form-control" required>
                                                <option selected="">Trạng thái</option>
                                               @foreach($status as $key => $item)
                                                   <option value="{{ $key }}">{{ $item['name'] }}</option>
                                               @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <button type="submit" class="mb-2 btn btn-primary">Xử lí</button>
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

