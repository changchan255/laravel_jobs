@extends('employer::layouts.app_employer')
@section('content')
    <section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(&quot;{{asset('assets/jobboard/images/resource/mslider1.jpg') }}&quot;) 50% -83.55px repeat scroll transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3>Welcome Tera Planer</h3>
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
					 			<form>
					 				<div class="row">
					 					<div class="col-lg-12">
					 						<span class="pf-title">Vị trí đăng tuyển<span class="red_w">*</span></span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Designer">
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Description</span>
					 						<div class="pf-field">
					 							<textarea>Spent several years working on sheep on Wall Street. Had moderate success investing in Yugos on Wall Street. Managed a small team buying and selling pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed severalnew methods for working with banjos in the aftermarket. Spent a weekend importing banjos in West Palm Beach, FL.In this position, the Software Engineer ollaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present</textarea>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Email</span>
					 						<div class="pf-field">
					 							<input type="text">
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Username</span>
					 						<div class="pf-field">
					 							<input type="text">
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Job Type</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art &amp; Culture</option>
													<option>Reading &amp; Writing</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Categories</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art &amp; Culture</option>
													<option>Reading &amp; Writing</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Offerd Salary</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art &amp; Culture</option>
													<option>Reading &amp; Writing</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Career Level</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" style="display: none;">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art &amp; Culture</option>
													<option>Reading &amp; Writing</option>
												</select>
                                            </div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Application Deadline Date</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="01.11.207" class="form-control datepicker">
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Skill Requirments</span>
					 						<div class="pf-field">
						 						<ul class="tags">
										           <li class="addedTag">Photoshop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
							            			<li class="tagAdd taglist">  
							              				 <input type="text" id="search-field">
										            </li>
												</ul>
											</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Complete Address</span>
					 						<div class="pf-field">
					 							<textarea>Collins Street West, Victoria 8007, Australia.</textarea>
					 						</div>
					 					</div>

					 				</div>
					 			</form>
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