@extends('employer::layouts.app_employer')
@section('content')
    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(&quot;{{asset('assets/jobboard/images/resource/mslider1.jpg') }}&quot;) 50% -83.55px repeat scroll transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>Danh sách ứng tuyển</h3>
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
                    @include('employer::components._inc_sidebar_employer')
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="profile-title">
                                <h3>Đánh giá ứng viên</h3>
                            </div>
                            <div class="profile-form-edit">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Nội dung</span>
                                            <div class="pf-field">
                                                <textarea name="aj_note">{!! old('aj_note', $applyJob->aj_note ?? '') !!} </textarea>
                                            </div>
                                            @if($errors->has('aj_note'))
                                                <span class="text-danger" style="color: red !important;font-size: 13px">{{$errors->first('aj_note')}}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <button type="submit">Xử lý thông tin</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
