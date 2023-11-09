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
													<select data-placeholder="City, province or region" class="chosen-city name="l">
														<option>Hà Nội </option>
														<option>Hồ Chí Minh</option>
														<option>Đà Nẵng</option>
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
										<a href="#" title="">Kỹ sư phần mềm</a>
										<a href="#" title="">Digital Marketing</a>
										<a href="#" title="">Kế toán trưởng</a>
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
											<i class="la la-bullhorn"></i>
											<span>{{ $item->c_name }}</span>
											<p>(22 open positions)</p>
										</a>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						@endforeach
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="">Xem tất cả các ngành nghề</a>
						</div>
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
							<span>Đăng ký theo dõi để nhận cập nhật về cơ hội việc làm mới và phù hợp nhất</span>
							<a href="" title="">Đăng ký ngay</a>
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
								<span class="job-is ft">{{ $item->getAttributeJob->a_name ?? "[N/A]" }}</span>
							</div><!-- Job -->
                            @endforeach
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="">Load more listings</a>
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
							<h2>Kind Words From Happy Candidates</h2>
							<span>What other people thought about the service provided by JobHunt</span>
						</div><!-- Heading -->
						<div class="reviews-sec" id="reviews-carousel">
							<div class="col-lg-6">
								<div class="reviews">
									<img src="{{asset('assets/jobboard/images/resource/r1.jpg') }}" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="{{asset('assets/jobboard/images/resource/r2.jpg') }}" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="{{asset('assets/jobboard/images/resource/r1.jpg') }}" alt="" />
									<h3>Augusta Silva <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
							</div>
							<div class="col-lg-6">
								<div class="reviews">
									<img src="{{asset('assets/jobboard/images/resource/r2.jpg') }}" alt="" />
									<h3>Ali Tufan <span>Web designer</span></h3>
									<p>Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything!  Can’t quite believe the service</p>
								</div><!-- Reviews -->
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
							<h2>Companies We've Helped</h2>
							<span>Some of the companies we've helped recruit excellent applicants over the years.</span>
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

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url({{asset('assets/jobboard/images/resource/parallax3.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Quick Career Tips</h2>
							<span>Found by employers communicate directly with hiring managers and recruiters.</span>
						</div><!-- Heading -->
						<div class="blog-sec">
							<div class="row">
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/b1.jpg') }}" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
                                                <a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/b2.jpg') }}" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="my-blog">
										<div class="blog-thumb">
											<a href="#" title=""><img src="{{asset('assets/jobboard/images/resource/b3.jpg') }}" alt="" /></a>
											<div class="blog-metas">
												<a href="#" title="">March 29, 2017</a>
												<a href="#" title="">0 Comments</a>
											</div>
										</div>
										<div class="blog-details">
											<h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
											<p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
											<a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text">
							<h3>Gat a question?</h3>
							<span>We're here to help. Check out our FAQs, send us an email or call us at 1 (800) 555-5555</span>
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
