<?php require_once('../init/config.php') ?>

<?php require_once('inc/header.php') ?>

<?php

$job_id = $_GET["job_id"];

?>

<?php if (isset($_POST['application_id'])) : ?>
	<?php

	$comments = $_POST['comments'];
	$vote = $_POST['vote'];
	$application_id = $_POST['application_id'];
	$member_id = $_SESSION['userdata']['id'];
	$member_name = $_SESSION['userdata']['name'];

	$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if ($conn->connect_error) {
		echo "ERROR ";
		die();
	}

	if ($vote == "upvote") {
		$result = "INSERT INTO `application_review`(`application_id`, `member_id`, `member_name`, `comments`, `up_vote`, `down_vote`) VALUES ('$application_id' , '$member_id' , '$member_name' ,'$comments' , '1','0')";
		$result2 = "UPDATE applications SET up_votes = up_votes + 1 , status = 'Reveiw Started' where id = " . $application_id;
	} elseif ($vote == "downvote") {
		$result = "INSERT INTO `application_review`(`application_id`, `member_id`, `member_name`, `comments`, `up_vote`, `down_vote`) VALUES ('$application_id' , '$member_id' , '$member_name' ,'$comments' , '0','1')";
		$result2 = "UPDATE applications SET down_votes = down_votes + 1 , status = 'Reveiw Started' where id = " . $application_id;
	}
	if ($conn->query($result) === TRUE) {

		if ($conn->query($result2) === TRUE) {
			echo '<script>alert("Application Reviewed Successfully")</script>';
			redirect('member/all_jobs.php');
		} else {
			echo '<script>alert("Something Went Wrong")</script>';
		}
	} else {
		echo '<script>alert("Something Went Wrong")</script>';
	}

	?>

<?php endif; ?>

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
	<!-- data tables -->
	<link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="../../images/uni-logo.svg" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-red">
	<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reviewModalLabel">Review For Application</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="" method="POST">
						<input id="application_id" name="application_id" type="hidden" value="">
						<h5>Would like to upvote or downvote ?</h3>
							<br>
							<div style="width: fit-content; margin:auto;">
								<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
									<input type="radio" class="btn-check" name="vote" value="upvote" id="btnradio1" autocomplete="off" checked>
									<label style="margin-right: 10px;" class="btn btn-outline-primary" for="btnradio1">Up Vote</label>

									<input type="radio" class="btn-check" name="vote" value="downvote" id="btnradio2" autocomplete="off">
									<label class="btn btn-outline-primary" for="btnradio2">Down Vote</label>

								</div>
							</div>
							<br>
							<div class="mb-3">
								<label for="message-text" class="col-form-label">Comments:</label>
								<textarea name="comments" required class="form-control" id="message-text"></textarea>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Submit Review</button>
							</div>
					</form>
				</div>

			</div>
		</div>
	</div>
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
							<div class="page-title">Co Committee Members</div>
						</div>
						<ol class="breadcrumb page-breadcrumb pull-right">
							<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>
							<li><a class="parent-item" href="#">Committee</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>
							<li class="active">Co Committee Members</li>
						</ol>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="tabbable-line">
							<!-- <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-bs-toggle="tab"> List View </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-bs-toggle="tab"> Grid View </a>
                                    </li>
                                </ul> -->
							<ul class="nav customtab nav-tabs" role="tablist">
								<!-- <li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
											View</a></li> -->
							</ul>
							<div class="tab-content">
								<div class="tab-pane active fontawesome-demo" id="tab1">
									<div class="row">
										<div class="col-md-12">
											<div class="card card-box">
												<div class="card-head">
													<header>Co Committee Members</header>
													<div class="tools">
														<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
														<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
														<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
													</div>
												</div>
												<div class="card-body ">

													<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
														<thead>
															<tr>
																<th>Sr. No.</th>
																<th>Applicant Name </th>
																<th>Skills </th>
																<th>Resume </th>
																<th>Cover Letter</th>
																<th>Give your Review</th>

															</tr>
														</thead>
														<tbody>

															<?php
															$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
															if ($conn->connect_error) {
																echo "ERROR ";
																die();
															}
															$member_id = $_SESSION['userdata']['id'];
															$result = $conn->query("SELECT * FROM `application_review` where member_id=".$member_id."");
															$applicaiton_ids_reviewed = array();
															while ($application = $result->fetch_array(MYSQLI_ASSOC)) {
																array_push($applicaiton_ids_reviewed, $application['application_id']);
															}
															$result1 = $conn->query("SELECT * FROM `applications` WHERE `job_id` = $job_id AND `status` != 'accepted' AND `status` != 'rejected'");
															$rowCount = 0;
															while ($row = $result1->fetch_array(MYSQLI_ASSOC)) {
																$applicant_already_reviewed = $row["id"];
                                    							if  (!in_array($applicant_already_reviewed,$applicaiton_ids_reviewed,TRUE)){
																	$rowCount = $rowCount + 1;

																echo ' <tr class="odd gradeX">
																				<td>
																				' . $rowCount . '
																				</td>
																				<td>' . $row["applicant_name"] . '</td>
																				<td class="left">' . $row["skills"] . '</td>
																				
																				<td><a target="_blank" href="' . $row["resume_link"] . '">Resume</a></td>
																				<td><a target="_blank" href="' . $row["c_letter_link"] . '">Cover Letter</a></td>
																				<td>
																					<button style="border:none;" data-bs-toggle="modal" data-bs-target="#reviewModal" data-appllicant-id="' . $row["id"] . '"
																						class="tblEditBtn">
																						<i class="fa fa-pencil"></i>
																					</button>
																				</td>
																				
																			</tr>';
															}
														}
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end page content -->
		<!-- start chat sidebar -->
		<?php
		// include "navigation/chatsidebar.php" 
		?>
		<!-- end chat sidebar -->
	</div>
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
	<script>
		var reviewModal = document.getElementById('reviewModal')
		reviewModal.addEventListener('show.bs.modal', function(event) {
			// Button that triggered the modal
			var button = event.relatedTarget
			var recipient = button.getAttribute('data-appllicant-id')

			var modalBodyInput = reviewModal.querySelector('#application_id')

			modalBodyInput.value = recipient
		})
	</script>
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- data tables -->
	<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap5.min.js"></script>
	<script src="../assets/js/pages/table/table_data.js"></script>
	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>


</html>