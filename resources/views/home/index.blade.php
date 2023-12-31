@extends('layouts.app_frontend')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@stop
@section('content')
    <section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-featured-sec">
							<div class="new-slide">
								<img src="{{asset('assets/jobboard/images/resource/vector-1.png') }}">
							</div>
							<div class="job-search-sec">
								<div class="job-search">
									<h3>Hệ thống tìm việc lớn nhất Việt Nam</h3>
									<span>Nơi kết nối giấc mơ và cơ hội</span>
									<form action="{{ route('get.search.job') }}" >
										<div class="row">
											<div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
												<div class="job-field">
													<input type="text" name="t" placeholder="Chức danh, Kỹ năng, Tên công ty" />
													<i class="la la-keyboard-o"></i>
												</div>
											</div>
											<div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
												<div class="job-field">
													<select data-placeholder="Chọn địa điểm"
                                                            class="chosen-city" name="l">
                                                        <option> </option>
														<option>Hà Nội </option>
                                                        <option>Quảng Ninh</option>
                                                        <option>Bắc Ninh</option>
                                                        <option>Đà Nẵng</option>
														<option>Hồ Chí Minh</option>
                                                        <option>Bình Dương</option>
														<option>Cần Thơ</option>
													</select>
													<i class="la la-map-marker"></i>
												</div>
											</div>
											<div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
												<button type="submit"><i class="la la-search"></i></button>
											</div>
										</div>
									</form>
									<div class="or-browser">
										<span>Từ khóa nổi bật</span>
										<a href="{{ route('get.search.job') }}" title="">Kỹ sư phần mềm</a>
										<a href="{{ route('get.search.job') }}" title="">Digital Marketing</a>
										<a href="{{ route('get.search.job') }}" title="">Kế toán trưởng</a>
									</div>
								</div>
							</div>
							<div class="scroll-to">
								<a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="scroll-here">
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Ngành nghề phổ biến</h2>
							<span>Lướt xem việc làm mới cập nhật</span>
						</div><!-- Heading -->
						@foreach($careersHot->chunk(4) as $careers)
						<div class="cat-sec">
							<div class="row no-gape">
								@foreach($careers as $item)
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="p-category">
										<a href="{{ route('get.career.index',['slug' => $item->c_slug]) }}" title="{{ $item->c_name }}">
                                            <img src="{{ pare_url_file($item->c_avatar) }}"  alt="" style="max-width: 100%; height: 80px; margin-top: 10px">
											<span>{{ $item->c_name }}</span>
											<p>({{ $item->jobs()->count() }} vị trí đang tuyển)</p>
										</a>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block double-gap-top double-gap-bottom">
			<div data-velocity="-.1" style="background: url({{asset('assets/jobboard/images/resource/parallax1.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text-block">
							<h3>Tạo ấn tượng với nhà tuyển dụng cùng CV Online</h3>
							<span>Đăng ký tài khoản để nhận cập nhật về cơ hội việc làm mới và phù hợp nhất</span>
							<a class="signup-popup" title="">Đăng ký ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Việc làm mới nhất</h2>
							<span>Khám phá các cơ hội nghề nghiệp.</span>
						</div><!-- Heading -->
						<div class="job-listings-sec">
                            @foreach($jobsNew as $item)
							<div class="job-listing">
								<div class="job-title-sec">
									<div class="c-logo"> <img
                                            src="{{ pare_url_file($item->company->c_logo ?? "") }}"
                                            alt=""/></div>
									<h3><a href="{{ route('get.job',['slug' => $item->j_slug, 'hashID' => $item->j_hash_slug]) }}" title="">{{ $item->j_name }}</a></h3>
									<span>{{ $item->company->c_name ?? "[N/A]" }}</span>
								</div>
								<span class="job-lctn"><i class="la la-map-marker"></i>{{ $item->j_address }}</span>
								<span class="fav-job {{ get_data_user('users') ? 'js-favourite' : 'js-login-message' }}" data-url="{{ route('ajax_get.add.favourite', $item->j_hash_slug) }}"><i class="la la-heart-o"></i></span>
								<span class="job-is ft" style="padding: 10px 10px">{{ $item->getAttributeJob->a_name ?? "[N/A]" }}</span>
							</div><!-- Job -->
                            @endforeach
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="{{ route('get.search.job') }}" title="">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url({{asset('assets/jobboard/images/resource/parallax2.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading light">
							<h2>Tiên phong trong nền tảng tìm kiếm việc làm</h2>
							<span>YTJob có những tính năng nào?</span>
						</div><!-- Heading -->
						<div class="reviews-sec" id="reviews-carousel">
							<div class="col-lg-6">
								<div class="reviews">
									<img src="{{asset('assets/jobboard/images/resource/find_job.png') }}" alt="" />
									<h3>Tìm việc làm <span></span></h3>
									<p>Với hơn 1 triệu + việc làm tại Việt Nam có trên trang web, Bạn có thể dễ dàng tìm kiếm việc làm mọi lúc, mọi nơi. Bạn có thể nhanh chóng ứng tuyển vào công ty hàng đầu có chế độ phúc lợi, môi trường làm việc tốt nhất.</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="{{asset('assets/jobboard/images/resource/resume.png') }}" alt="" />
									<h3>Mẫu CV đẹp <span></span></h3>
									<p>Để giữ cho đơn xin việc của bạn nhất quán và chuyên nghiệp, các mẫu CV xin việc của chúng tôi hoàn toàn phù hợp với các mẫu Sơ yếu lý lịch. Tạo và tải xuống Sơ yếu lý lịch chuyên nghiệp của bạn trong vòng chưa đầy 5 phút.</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="{{asset('assets/jobboard/images/resource/cover_letter.png') }}" alt="" />
									<h3>Mẫu Cover letters <span></span></h3>
									<p>Cho dù bạn ứng tuyển vào một ngành bảo thủ như ngân hàng hay một công ty khởi nghiệp cường điệu, bạn có thể điều chỉnh các mẫu thư xin việc của chúng tôi để phù hợp với nhu cầu chính xác của bạn.</p>
								</div><!-- Reviews -->
							</div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{asset('assets/jobboard/images/resource/find_job.png') }}" alt="" />
                                    <h3>Tìm việc làm <span></span></h3>
                                    <p>Với hơn 1 triệu + việc làm tại Việt Nam có trên trang web, Bạn có thể dễ dàng tìm kiếm việc làm mọi lúc, mọi nơi. Bạn có thể nhanh chóng ứng tuyển vào công ty hàng đầu có chế độ phúc lợi, môi trường làm việc tốt nhất.</p>
                                </div><!-- Reviews -->
                            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Nhà tuyển dụng hàng đầu</h2>
							<span>Bạn có vị trí cần tuyển dụng? Nền tảng của JobHunt sẽ giúp bạn kết nối với những ứng viên tiềm năng nhanh chóng!</span>
						</div><!-- Heading -->
						<div class="comp-sec">
							<div class="company-img">
								<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/cc1.jpg') }}" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/cc2.jpg') }}" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/cc3.jpg') }}" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/cc4.jpg') }}" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/cc5.jpg') }}" alt="" /></a>
							</div><!-- Client  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

{{--	<section>--}}
{{--		<div class="block">--}}
{{--			<div data-velocity="-.1" style="background: url({{asset('assets/jobboard/images/resource/parallax3.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->--}}
{{--			<div class="container">--}}
{{--				<div class="row">--}}
{{--					<div class="col-lg-12">--}}
{{--						<div class="heading">--}}
{{--							<h2>Quick Career Tips</h2>--}}
{{--							<span>Found by employers communicate directly with hiring managers and recruiters.</span>--}}
{{--						</div><!-- Heading -->--}}
{{--						<div class="blog-sec">--}}
{{--							<div class="row">--}}
{{--								<div class="col-lg-4">--}}
{{--									<div class="my-blog">--}}
{{--										<div class="blog-thumb">--}}
{{--											<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/b1.jpg') }}" alt="" /></a>--}}
{{--											<div class="blog-metas">--}}
{{--												<a href="#" title="">March 29, 2017</a>--}}
{{--												<a href="#" title="">0 Comments</a>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--										<div class="blog-details">--}}
{{--											<h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>--}}
{{--											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>--}}
{{--											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="col-lg-4">--}}
{{--									<div class="my-blog">--}}
{{--										<div class="blog-thumb">--}}
{{--                                                <a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/b2.jpg') }}" alt="" /></a>--}}
{{--											<div class="blog-metas">--}}
{{--												<a href="#" title="">March 29, 2017</a>--}}
{{--												<a href="#" title="">0 Comments</a>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--										<div class="blog-details">--}}
{{--											<h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>--}}
{{--											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>--}}
{{--											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="col-lg-4">--}}
{{--									<div class="my-blog">--}}
{{--										<div class="blog-thumb">--}}
{{--											<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/b3.jpg') }}" alt="" /></a>--}}
{{--											<div class="blog-metas">--}}
{{--												<a href="#" title="">March 29, 2017</a>--}}
{{--												<a href="#" title="">0 Comments</a>--}}
{{--											</div>--}}
{{--										</div>--}}
{{--										<div class="blog-details">--}}
{{--											<h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>--}}
{{--											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>--}}
{{--											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</section>--}}

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text">
							<h3>Nếu bạn có bất kỳ câu hỏi nào</h3>
							<span>Chúng tôi luôn sẵn sàng giúp đỡ! Liên hệ bằng email hoặc gọi ngay hotline +1 23-456-7890 để được hỗ trợ và tư vấn kịp thời.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('script')
	<script src="{{ asset('js/home.js') }}"></script>
@stop
