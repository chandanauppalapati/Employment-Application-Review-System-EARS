<?php require_once('../init/config.php') ?>
<?php require_once('inc/header.php') ?>

<!DOCTYPE html>
<html>


<!-- login.html  06:32:07 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<meta name="author" content="RedstarHospital" />
	<title>Algoma University | EARS.</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link rel="stylesheet" href="../assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="../assets/css/pages/login.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="../../images/uni-logo.svg" />

</head>

<?php if (isset($_POST['sign_up_form_submitted'])) : ?>
	<?php

	// echo '<script>alert("Project Added Succeffully")</script>';

	$name = $_POST['name'];
	$designation = $_POST['designation'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);


	// $conn2 = new mysqli("localhost", $u_name, $pass, "freshers");
	$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if ($conn->connect_error) {
		echo "ERROR ";
		die();
	}

	$result = "INSERT INTO `applicants`(`name`, `designation`, `email`, `username`, `password` ) VALUES ('$name' , '$designation' ,'$email' ,  '$username', '$password' )";

	if ($conn->query($result) === TRUE) {
		echo '<script>alert("Account Created Successfully")</script>';
		redirect('applicant/login.php');
	} else {
		echo ("Error description: " . $conn->error);
		die();
	}



	?>
<?php endif; ?>

<body>
	<div class="main">
		<!-- Sing in  Form -->
		<section class="sign-in" id="login_applicant" style="display: block;">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure><img src="../../images/uni-logo.svg" alt="sing up image"></figure>
						<!-- <a href="sign_up.html" class="signup-image-link">Create an account</a> -->
					</div>
					<div class="signin-form">
						<h2 class="form-title">Login</h2>
						<form class="register-form" id="login-applicant-frm" method="post" action="">
							<div class="form-group">
								<div class="">
									<input name="username" type="text" placeholder="User Name" class="form-control input-height" />
								</div>
							</div>
							<div class="form-group">
								<div class="">
									<input name="password" type="password" placeholder="Password" class="form-control input-height" />
								</div>
							</div>
							<!-- <div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
									me</label>
							</div> -->
							<div class="row">
								<div class="form-group form-button col-lg-6">
									<button class="btn btn-round btn-primary" name="signin" id="signin">Login</button>
								</div>

							</div>
						</form>

						<div>
							Dont Have an Account? <br>
							<a id="createAccount" style="text-decoration: underline;">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sign-in" id="sign_up" style="display: none;">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image" style="margin: auto;">
						<figure><img src="../../images/uni-logo.svg" alt="sing up image"></figure>
						<!-- <a href="sign_up.html" class="signup-image-link">Create an account</a> -->
					</div>
					<div class="signin-form">
						<h2 class="form-title">Sign Up</h2>
						<form method="POST" action="">
							<input type="hidden" name="sign_up_form_submitted" value="1" />
							<div class="form-group">
								<div class="">
									<input required name="name" type="text" placeholder="Name" class="form-control input-height" />
								</div>
							</div>
							<div class="form-group">
								<div class="">
									<input required name="username" type="text" placeholder="User Name" class="form-control input-height" />
								</div>
							</div>
							<div class="form-group">
								<div class="">
									<input required name="designation" type="text" placeholder="Designation" class="form-control input-height" />
								</div>
							</div>
							<div class="form-group">
								<div class="">
									<input required name="email" type="email" placeholder="Email" class="form-control input-height" />
								</div>
							</div>
							<div class="form-group">
								<div class="">
									<input required name="password" type="password" placeholder="Password" class="form-control input-height" />
								</div>
							</div>

							<!-- <div class="form-group">
								<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
								<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
									me</label>
							</div> -->
							<div class="row">
								<div class="form-group form-button col-lg-6">
									<button class="btn btn-round btn-primary" name="signin" id="signin">Sign Up</button>
								</div>

							</div>
						</form>
						<!-- <div class="social-login">
							<span class="social-label">Or login with</span>
							<ul class="socials">
								<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
								<li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
								<li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</section>
	</div>

	<script>
		document.getElementById("createAccount").addEventListener("click", () => {
			document.getElementById("sign_up").setAttribute("style", "");
			document.getElementById("login_applicant").setAttribute("style", "display: none;");
		})
	</script>

	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- end js include path -->

</body>


<!-- login.html  06:32:07 GMT -->

</html>