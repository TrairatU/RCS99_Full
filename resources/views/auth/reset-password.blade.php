<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('authen/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('authen/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('authen/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-register">

				<form class="login100-form validate-form" method="POST" action="{{ route('password.store') }}">
                @csrf

				<!-- Password Reset Token -->
				<input type="hidden" name="token" value="{{ $request->route('token') }}">

					<span class="login100-form-title">
						รีเซ็ตรหัสผ่าน
					</span>

					<!-- Email Address -->
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" value="{{ $request->email }}" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="textsmall">
						<x-input-error :messages="$errors->get('email')" class="text-danger" />
					</div>

					<!-- Password -->
                    <div class="wrap-input100 validate-input mt-3" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="password" name="password" placeholder="รหัสผ่าน" required autocomplete="new-password" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="textsmall">
						<x-input-error :messages="$errors->get('password')" class="text-danger" />
					</div>

					<!-- Confirm Password -->
					<div class="wrap-input100 validate-input mt-3" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required autocomplete="new-password" />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="textsmall">
						<x-input-error :messages="$errors->get('password_confirmation')" class="text-danger" />
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							แก้ไขรหัสผ่าน
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('authen/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('authen/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('authen/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>


