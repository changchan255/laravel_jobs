@extends('user::layouts.app_user')
@section('content')
    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(&quot;{{asset('assets/jobboard/images/resource/mslider1.jpg') }}&quot;) 50% -83.55px repeat scroll transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Ứng viên</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="block no-padding">
            <div class="container">
                <div class="row no-gape">
                    @include('user::components._inc_sidebar_user')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec addscroll">
                                <h3>Cập nhật mật khẩu</h3>
                                <div class="profile-form-edit">
                                    <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="pf-title">Mật khẩu cũ<span class="red_w">*</span></span>
                                                <div class="pf-field">
                                                    <input type="password" placeholder="" name="password_old" value="{{ old('password_old') }}">
                                                </div>
                                                @if($errors->has('password_old'))
                                                    <span class="text-danger" style="color: red !important;font-size: 13px">{{$errors->first('password_old')}}</span>
                                                @endif
                                                @if(session()->has('password_old'))
                                                    <span class="text-danger" style="color: red !important;font-size: 13px">{{ session()->get('password_old') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="pf-title">Mật khẩu mới<span class="red_w">*</span></span>
                                                <div class="pf-field">
                                                    <input type="password" placeholder="" name="password" value="">
                                                </div>
                                                @if($errors->has('password'))
                                                    <span class="text-danger" style="color: red !important;font-size: 13px">{{$errors->first('password')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="pf-title">Xác nhận mật khẩu<span class="red_w">*</span></span>
                                                <div class="pf-field">
                                                    <input type="password" placeholder="" name="password_confirm" value="">
                                                </div>
                                                @if($errors->has('password_confirm'))
                                                    <span class="text-danger" style="color: red !important;font-size: 13px">{{$errors->first('password_confirm')}}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <button type="submit">Cập nhật thông tin</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

