@extends('layouts.app_frontend')
@section('content')
<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url({{asset('assets/jobboard/images/resource/mslider1.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div>
        <!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Tin tuyển dụng</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="block less-top">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 column margin_widget">
                    <div class="widget border">
                        <div class="aside__widget">
                        <h3 class="sb-title open"style="margin-bottom: 15px;font-weight: 600;">Kinh nghiệm làm việc</h3>
                        <div class="aside__widget-group myList">
                            @foreach($filterJob['experience'] ?? [] as $item)
                                {{--{{ request()->fullUrlWithQuery(['e' => $item->id]) }} Tìm kiếm theo e (experience) lấy ra id --}}
                                <a href="{{ request()->fullUrlWithQuery(['e' => $item->id]) }} " rel="nofollow" title="{{ $item->a_name }}"
                                   class="aside__widget-link text-collapse {{ Request::get('e') == $item->id ? 'active' : '' }}" style="display: block; font-size: 14px; padding: 5px 10px;color: #666">
                                    <span>{{ $item->a_name }}</span>
                                </a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="widget border">
                        <div class="aside__widget">
                            <h3 class="sb-title open" style="margin-bottom: 15px;font-weight: 600;">Cấp bậc</h3>
                            <div class="aside__widget-group myList">
                                @foreach($filterJob['ranks'] ?? [] as $item)
                                    <a href="{{ request()->fullUrlWithQuery(['r' => $item->id]) }}" rel="nofollow" title="{{ $item->a_name }}"
                                       class="aside__widget-link text-collapse {{ Request::get('r') == $item->id ? 'active' : '' }}" style="display: block; font-size: 14px; padding: 5px 10px;color: #666">
                                        <span>{{ $item->a_name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="widget border">
                        <div class="aside__widget">
                            <h3 class="sb-title open" style="margin-bottom: 15px;font-weight: 600;">Loại hình làm việc</h3>
                            <div class="aside__widget-group myList">
                                @foreach($filterJob['formOfWork'] ?? [] as $item)
                                    <a href="{{ request()->fullUrlWithQuery(['f' => $item->id]) }}" rel="nofollow" title="{{ $item->a_name }}"
                                       class="aside__widget-link text-collapse {{ Request::get('f') == $item->id ? 'active' : '' }}" style="display: block; font-size: 14px; padding: 5px 10px;color: #666">
                                        <span>{{ $item->a_name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-lg-9 column">
                    <div class="filterbar">
                        <p>Có tổng cộng {{ $jobs->total() }} tin tuyển dụng</p>
                    </div>
                    <div class="emply-list-sec style2">
                        @foreach($jobs ?? [] as $item)
                            <div class="emply-list">
                                <div class="emply-list-thumb">
                                    <a href="{{ route('get.job',['slug'=> $item->j_slug, 'hashID' => $item->j_hash_slug]) }}" title="{{ $item->j_name }}">
                                        <img src="{{ pare_url_file($item->company->c_logo ?? '') }}" alt="{{ $item->j_name }}">
                                    </a>
                                </div>
                                <div class="emply-list-info">
                                    <div class="emply-pstn">{{ $item->getAttributeJob->a_name ?? "[N\A]" }}</div>
                                    <h3><a href="{{ route('get.job',['slug'=> $item->j_slug, 'hashID' => $item->j_hash_slug]) }}" title="{{ $item->j_name }}">{{ $item->j_name }}</a></h3>
                                    <span>{{ $item->company->c_name ?? "[N/A]" }}</span>
                                    <h6><i class="la la-map-marker"></i> {{ $item->j_address }}</h6>
                                </div>
                            </div>
                        @endforeach
                            {!! $jobs->appends($query ?? [])->links() !!}
                        <!-- Employe List -->

                    </div>
{{--                    <div class="job-listings-sec">--}}
{{--                        @foreach($jobs ?? [] as $item)--}}
{{--                            <div class="job-listing wtabs">--}}
{{--                                <div class="job-title-sec">--}}
{{--                                    <div class="c-logo"> <img src="{{ pare_url_file($item->company->c_logo ?? '') }}" alt=""> </div>--}}
{{--                                    <h3><a href="{{ route('get.job',['slug' => $item->j_slug, 'hashID' => $item->j_hash_slug]) }}" title="">{{ $item->j_name }}</a></h3>--}}
{{--                                    <span>{{ $item->company->c_name ?? "[N/A]"}}</span>--}}
{{--                                    <div class="job-lctn"><i class="la la-map-marker"></i>{{ $item->j_address }}</div>--}}
{{--                                </div>--}}
{{--                                <div class="job-style-bx">--}}
{{--                                    <span class="job-is ft">{{ $item->getAttributeJob->a_name ?? "[N/A]" }}</span>--}}
{{--                                    <span class="fav-job {{ get_data_user('users') ? 'js-favourite' : 'js-login-message' }}" data-url="{{ route('ajax_get.add.favourite', $item->j_hash_slug) }}"><i class="la la-heart-o"></i></span>--}}
{{--                                    <i>5 months ago</i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>


@stop
