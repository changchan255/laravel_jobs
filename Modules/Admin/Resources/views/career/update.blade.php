@extends('admin::layouts.master')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <h3 class="page-title">Cập nhật ngành nghề</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">Cập nhật ngành nghề</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <form action="" method="POST" style="text-align: left" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail">Tên ngành nghề</label>
                                            <input type="text" class="form-control"  value="{{ $career->c_name ?? '' }}" name="c_name">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="c_avatar" class="custom-file-input" id="inputGroupFile01"
                                                       aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Chọn file từ máy tính</label>
                                            </div>
                                        </div>
                                        @if(isset($career->c_avatar))
                                            <img src="{{ pare_url_file($career->c_avatar) }}" style="width: 200px; height: auto" alt="">
                                        @endif
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


