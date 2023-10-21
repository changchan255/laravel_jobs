@extends('employer::layouts.app_employer')
@section('content')
    <section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(&quot;{{asset('assets/jobboard/images/resource/mslider1.jpg') }}&quot;) 50% -83.55px repeat scroll transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3>Đăng tin tuyển dụng mới</h3>
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
					 			<h3>Đăng tin tuyển dụng mới</h3>
					 		</div>
					 		<div class="profile-form-edit">
                                @include('employer::job.form')
					 		</div>
					 		<div class="contact-edit">
					 			<form>
					 				<div class="row">
					 					<div class="col-lg-12">
					 						<a href="#" title="" class="srch-lctn">Search Location</a>
					 					</div>
					 					<div class="col-lg-12">
					 						<button type="submit">Next</button>
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
