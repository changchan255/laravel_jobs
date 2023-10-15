<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Đăng nhập</h3>
		<form action="{{ route('post.login')}}" method="POST" id="formLogin"> 
			<div class="cfield">
				<input type="email" name="email" required placeholder="Email" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" name="password" required placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<a href="#" title="">Quên mật khẩu?</a>
			<button type="submit" class="js-login">Đăng nhập</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Đăng ký</h3>
		<form action="{{ route('post.register')}}" method="POST" id="formRegister">
			@csrf
			<div class="cfield">
				<input type="text" required placeholder="Name" name="name" />
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="email" required placeholder="Email" name="email" />
				<i class="la la-envelope-o"></i>
			</div>
			<div class="cfield">
				<input type="password" required placeholder="********" name="password" />
				<i class="la la-key"></i>
			</div>
			<div class="cfield">
				<input type="text" required placeholder="Phone Number" name="phone" />
				<i class="la la-phone"></i>
			</div>
			<button type="submit" class="js-register">Đăng ký</button>
		</form>
		<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</div>
</div><!-- SIGNUP POPUP -->