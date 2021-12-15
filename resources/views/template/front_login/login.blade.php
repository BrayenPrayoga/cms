<!DOCTYPE html>
<html lang="en">
<head>
	<title>MANAGEMENT SYSTEM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-75 p-r-75 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}
					<div class="login100-form-avatar">
						<img src="{{ asset('assets/img/icon.png') }}" alt="AVATAR">
					</div>

					<span class="login100-form-title p-b-32">
						CONTENT MANAGEMENT SYSTEM
					</span>

					{{-- <span class="txt1 p-b-11">
						Username
					</span> --}}
					<div class="wrap-input100 validate-input m-b-25" data-validate = "Email is required">
						<input class="input100" type="email" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					
					{{-- <span class="txt1 p-b-11">
						Password
					</span> --}}
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						{{-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div> --}}

						{{-- <div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div> --}}
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="asset_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="asset_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="asset_login/vendor/bootstrap/js/popper.js"></script>
	<script src="asset_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="asset_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="asset_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="asset_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="asset_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="asset_login/js/main.js"></script>

</body>
</html>