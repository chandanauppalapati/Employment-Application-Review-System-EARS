<?php require_once('../init/config.php') ?>

<?php require_once('inc/header.php') ?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Algoma University | EARS.</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="../assets/plugins/flatpicker/css/flatpickr.min.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="../../images/uni-logo.svg" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-red">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.php">
						<span class="logo-default"><img width="70%" src="https://algomau.ca/wp-content/themes/understrap-child/img/logo-white.svg" alt="" srcset=""></span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>

				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<?php
				include "navigation/topmenu.php"
				?>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<?php
		include "navigation/colorsetting.php"
		?>
	</div>
	</div>
	<!-- end color quick setting -->
	<!-- start page container -->
	<div class="page-container">
		<!-- start sidebar menu -->
		<?php
		include "navigation/sidebar.php"
		?>
		<!-- end sidebar menu -->
		<!-- start page content -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<div class="page-bar">
					<div class="page-title-breadcrumb">
						<div class=" pull-left">
							<div class="page-title">Add Member</div>
						</div>
						<ol class="breadcrumb page-breadcrumb pull-right">
							<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>
							<li><a class="parent-item" href="#">Committee</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>
							<li class="active">Add Member</li>
						</ol>
					</div>
				</div>

				<style>
					.mdl-textfield--floating-label.is-invalid .mdl-textfield__label {
						color: #747474 !important;
					}

					.mdl-textfield.is-invalid .mdl-textfield__input {
						border-color: rgba(0, 0, 0, 0.35) !important;
					}
				</style>

				<form action="" method="POST">
					<input type="hidden" name="form_submitted" value="1" />

					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Basic Information</header>
									<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body row">
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="name" class="mdl-textfield__input" type="text" id="txtFirstName" required>
											<label class="mdl-textfield__label">Name</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="designation" class="mdl-textfield__input" type="text" id="designation" required>
											<label class="mdl-textfield__label">Designation</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="dept" class="mdl-textfield__input" type="text" value="<?php echo $_SESSION['userdata']['dept'];?>" id="txtemail" readonly>
											<label class="mdl-textfield__label">Department</label>
											<!-- <span class="mdl-textfield__error">Enter Valid Email Address!</span> -->
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="email" class="mdl-textfield__input" type="email" id="txtemail" required>
											<label class="mdl-textfield__label">Email</label>
											<!-- <span class="mdl-textfield__error">Enter Valid Email Address!</span> -->
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="username" class="mdl-textfield__input" type="text" id="username" required>
											<label class="mdl-textfield__label">User Name</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="password" class="mdl-textfield__input" type="password" id="txtPwd" required>
											<label class="mdl-textfield__label">Password</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input name="joining_date" class="mdl-textfield__input" type="text" id="date">
											<label class="mdl-textfield__label">Joining Date</label>
										</div>
									</div>

									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-circle btn-primary">Submit</button>
										<button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-danger">Cancel</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
		<!-- end page content -->
		<!-- start chat sidebar -->
		<?php
		// include "navigation/chatsidebar.php" 
		?>
		<!-- end chat sidebar -->
	</div>


	<?php if (isset($_POST['form_submitted'])) : ?>
		<?php

		// echo '<script>alert("Project Added Succeffully")</script>';

		$name = $_POST['name'];
		$designation = $_POST['designation'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$joining_date = $_POST['joining_date'];
		$password = md5($password);
		$dept = $_POST['dept'];
		$dept_id = $_SESSION['userdata']['dept_id'];


		// $conn2 = new mysqli("localhost", $u_name, $pass, "freshers");
		$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
		if ($conn->connect_error) {
			echo "ERROR ";
			die();
		}

		$result = "INSERT INTO `members`(`name`, `designation`, `email`, `username`, `password`, `dept` ,`dept_id` , `joining_date` ) VALUES ('$name' , '$designation' ,'$email' ,  '$username', '$password' ,'$dept' ,'$dept_id' , '$joining_date')";

			if ($conn->query($result) === TRUE) {

				$result2 = "INSERT INTO `applicants`(`name`, `designation`, `email`, `username`, `password`) VALUES ('$name' , '$designation' ,'$email' , '$username', '$password')";
				if ($conn->query($result2) === TRUE) {
					echo '<script>alert("Member Added Successfully")</script>';
					redirect('chair/members.php');
				} else {
					echo("Error description: " . $conn -> error);
					die();
				}
			    
			} else {
			    echo("Error description: " . $conn -> error);
			    die();
			}

		

		?>

	<?php endif; ?>


	<!-- end page container -->
	<!-- start footer -->
	<div class="page-footer">
		<div class="page-footer-inner">
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<script src="../assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="../assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="../assets/js/pages/date-time/date-time.init.js"></script>
	<script src="../assets/js/pages/validation/form-validation.js"></script>
	<script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="../assets/plugins/jquery-validation/js/additional-methods.min.js"></script>

	<!-- dropzone -->
	<script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- end js include path -->
</body>


</html>