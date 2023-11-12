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
                                <h3>Cập nhật thông tin</h3>
                                <div class="profile-form-edit">
                                    <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="pf-title">Họ tên<span class="red_w">*</span></span>
                                                <div class="pf-field">
                                                    <input type="text" placeholder="Họ tên" name="name"
                                                           value="{{ old('name', $user->name ?? '') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="pf-title">Số điện thoại</span>
                                                <div class="pf-field">
                                                    <input type="text" placeholder="Số điện thoại" name="phone"
                                                           value="{{ old('phone', $user->phone ?? '') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="pf-title">Email<span class="red_w">*</span></span>
                                                <div class="pf-field">
                                                    <input type="text" placeholder="Email" name="email" disabled value="{{ old('email', $user->email ?? '') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="pf-title">Địa chỉ</span>
                                                <div class="pf-field">
                                                    <input type="text" placeholder="Địa chỉ" name="address"
                                                           value="{{ old('address', $user->address ?? '') }}">
                                                </div>
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

