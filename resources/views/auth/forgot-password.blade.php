<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
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
			<div class="wrap-login100">

				<form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                @csrf
					<span class="login100-form-title">
						รีเซ็ตรหัสผ่าน
					</span>

					<!-- Email Address -->
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="อีเมล" required autofocus />
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="textsmall">
						<x-input-error :messages="$errors->get('email')" class="text-danger" />
					</div>

					<!-- Session Status -->
					<div class="mt-1">	
						<x-auth-session-status class="mb-2 text-success" :status="session('status')" />
					</div>

					<!-- Confirm button -->
                    <div class="container-login100-form-btn">
						<button class="login100-form-btn">
							ส่งลิงก์สำหรับแก้ไขรหัสผ่าน
						</button>
					</div>

					<!-- Back to Home page -->
					<div class="text-center p-t-136">
						<a class="txt2" href="{{route('welcome')}}">
							กลับไปยังหน้าแรก
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
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