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
                                <h3>Danh sách yêu thích</h3>
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Tiêu đề</td>
{{--                                        <td>Thời gian tạo &amp; Hạn nộp hồ sơ</td>--}}
{{--                                        <td>Trạng thái</td>--}}
                                        <td>Thao tác</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jobs ?? [] as $item)
                                        <tr>
                                            <td>
                                                <div class="table-list-title">
                                                    <h3><a target="_blank" href="{{ route('get.job',['slug'=> $item->j_slug, 'hashID' => $item->j_hash_slug]) }}" title="">{{ $item->j_name }}</a></h3>
                                                    <span><i class="la la-map-marker"></i>{{ $item-> j_address}}</span>
                                                </div>
                                            </td>
{{--                                            <td>--}}
{{--                                                <span>{{ $item->created_at }}</span><br>--}}
{{--                                                <span>{{ $item->j_time }}</span>--}}
{{--                                            </td>--}}
{{--                                            <td>--}}
{{--                                                <span class="status active">{{ $item->getStatus($item->j_status)['name'] }}</span>--}}
{{--                                            </td>--}}
                                            <td>
                                                <ul class="action_job">
                                                    <li><span>Hủy bỏ</span><a href="{{ route('get_user.job.favourite_remove', $item->id) }}" title=""><i class="la la-trash-o"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
