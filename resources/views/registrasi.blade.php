<!DOCTYPE html>
<!-- saved from url=(0048)https://colorlib.com/etc/lf/Login_v15/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Skillfull - Registrasi</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="icon" href="img/gurita.png">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/fontAwesome.js">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<meta name="robots" content="noindex, follow">
</head>
<body>

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/bgCoding.jpg);">
					<span class="login100-form-title-1">
						B U A T A K U N
					</span>
				</div>
				<form class="login100-form validate-form" action="/registrasi" method="post">
					@csrf
					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100 form-label" style="color:black;">Email</span>
						<input class="input100 @error('email') is-invalid @endError" type="cPassword" name="email" placeholder="Masukan email anda">
						<span class="focus-input100"></span>
						@error("email")
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>


					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100 form-label" style="color:black">Username</span>
						<input class="input100 @error('username') is-invalid @endError" type="text" name="username" placeholder="Masukan username anda">
						<span class="focus-input100"></span>
						@error("username")
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100 form-label" style="color:black;">Password</span>
						<input class="input100 @error('password') is-invalid @endError" type="password" name="password" placeholder="Masukan password anda">
						<span class="focus-input100"></span>
						@error("password")
						<div id="validationServerUsernameFeedback" class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>

					<div class="flex-sb-m w-full p-b-30">	
						<div class="container-login100-form-btn">
							<button class="login100-form-btn w-100" type="submit"> 
								Buat akun
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</body>

	</html>