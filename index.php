
<!DOCTYPE html>
<html>
	<head>
		<title>SIGN UP</title>
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<link href="assets/bootstrap-4.3.1-dist/css/bootstrap.css" type="text/css" rel="stylesheet"/>
		<link href="assets/css/style.css" type="text/css" rel="stylesheet"/>
		<link href="assets/fontawesome-free-6.2.0-web/css/all.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<!--Main Div-->
		<div class="banner">
			<div class="innerbox">
				
				<div class="container" id="container">
					<div class="form-container sign-up-container">
						<form name="myForm" action = "authentication.php" onsubmit = "return validation()" method = "POST">
							<h1>Welcome Back!</h1>
							
							<div class="social-container">
								<a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
								<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
								<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
							</div>
							<span>or use your account</span>
							<input type="email" placeholder="Email" name="femail"/>
							<input type="password" placeholder="Password" name="fpass"/>
							<a href="#">Forgot your password?</a>
							<button type="submit" value="Submit">Sign In</button>
						</form>
					</div>
					<div class="form-container sign-in-container pb-3">
						<form action="#">
							<img src="assets/img/logo.png" alt="XenonStack logo" class="w-100"/>
							<p>
								XenonStack Welcomes You 
							</p>
							<div class="row">
								
								<h3 class="dc">We believe in what people make possible</h3>
							</div>
						</form>
					</div>
					<div class="overlay-container">
						<div class="overlay">
							<!--Back page-->
							<div class="overlay-panel overlay-left">
								<img src="assets/img/logo.png" alt="XenonStack logo" class="w-100"/>
								<!-- <button class="ghost" id="signIn">Sign In</button> -->
							</div>
							<!--Front page-->
							<div class="overlay-panel overlay-right">
								<h1>Welcome Back!</h1>
								<p>Enter your personal details and start journey with us</p>
								<button class="ghost" id="signUp">Sign In</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="assets/js/jscript.js"></script>
</html>