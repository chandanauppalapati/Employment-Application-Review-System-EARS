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
	$applicant_id = $_POST['applicant_id'];
	$member_id = $_SESSION['userdata']['id'];

	$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if ($conn->connect_error) {
		echo "ERROR ";
		die();
	}

	if ($vote == "upvote") {
		$result = "INSERT INTO `application_review`(`application_id`, `member_id`,`member_name` , `comments`, `up_vote`, `down_vote`) VALUES ('$application_id' , '0' ,'ChairPerson','$comments' , '1','0')";
		$result2 = "UPDATE applications SET up_votes = up_votes + 1 , status = 'accepted' where id = " . $application_id;
		$result3 = "UPDATE applications SET status = 'rejected' where id != " . $application_id;
		$result4 = "UPDATE jobs SET close = '1' where id = " . $job_id;

		if ($conn->query($result) === TRUE) {
			if ($conn->query($result2) === TRUE) {
				if ($conn->query($result3) === TRUE) {
					if ($conn->query($result4) === TRUE) {
						echo '<script>alert("Application Finalised Successfully")</script>';
						redirect('chair/all_jobs.php');
					} else {
						echo '<script>alert("Something Went Wrong1")</script>';
					}
				} else {
					echo '<script>alert("Something Went Wrong2")</script>';
				}
			} else {
				echo '<script>alert("Something Went Wrong3")</script>';
			}
		} else {
			echo '<script>alert("Something Went Wrong4")</script>';
		}
	} elseif ($vote == "downvote") {
		$result = "INSERT INTO `application_review`(`application_id`, `member_id`, `comments`, `up_vote`, `down_vote`) VALUES ('$application_id' , '0' ,'$comments' , '0','1')";
		$result2 = "UPDATE applications SET down_votes = down_votes + 1 , status = 'rejected' where id = " . $application_id;

		if ($conn->query($result) === TRUE) {

			if ($conn->query($result2) === TRUE) {
				echo '<script>alert("Application Finalised Successfully")</script>';
				redirect('member/all_jobs.php');
			} else {
				echo '<script>alert("Something Went Wrong")</script>';
			}
		} else {
			echo '<script>alert("Something Went Wrong")</script>';
		}
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
						<input id="applicant_id" name="applicant_id" type="hidden" value="">
						<h5>Would like to Accept or Reject ?</h3>
							<br>
							<div style="width: fit-content; margin:auto;">
								<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
									<input type="radio" class="btn-check" name="vote" value="upvote" id="btnradio1" autocomplete="off" checked>
									<label style="margin-right: 10px;" class="btn btn-outline-primary" for="btnradio1">Accept</label>

									<input type="radio" class="btn-check" name="vote" value="downvote" id="btnradio2" autocomplete="off">
									<label class="btn btn-outline-primary" for="btnradio2">Reject</label>

								</div>
							</div>
							<br>
							<div class="mb-3">
								<label for="message-text" class="col-form-label">Comments:</label>
								<textarea name="comments" required class="form-control" id="message-text"></textarea>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Submit</button>
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
							<div class="page-title">Job Applications</div>
						</div>
						<ol class="breadcrumb page-breadcrumb pull-right">
							<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>
							<li><a class="parent-item" href="#">Job</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>
							<li class="active">Job Applications</li>
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
													<header>Job Applications for Job ID :- job-<?php echo $job_id ?></header>
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
																<th>Total Up votes</th>
																<th>Total Down votes</th>
																<th>See All Reviews</th>
																<th>Final Decision</th>
															</tr>
														</thead>
														<tbody>

															<?php
															$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
															if ($conn->connect_error) {
																echo "ERROR ";
																die();
															}
															$result = $conn->query("SELECT * FROM `applications` WHERE `job_id` = $job_id AND `status` != 'accepted' AND `status` != 'rejected'");
															$rowCount = 0;
															while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
																// echo $row["name"];
																$rowCount = $rowCount + 1;

																echo ' <tr class="odd gradeX">
																			<td>
																			' . $rowCount . '
																			</td>
																			<td>' . $row["applicant_name"] . '</td>
																			<td class="left">' . $row["skills"] . '</td>
																			
																			<td><a target="_blank" href="' . $row["resume_link"] . '">Resume</a></td>
																			<td><a target="_blank" href="' . $row["c_letter_link"] . '">Cover Letter</a></td>
																			<td>' . $row["up_votes"] . '</td>
																			<td class="left">' . $row["down_votes"] . '</td>
																			<td>
																				<div style="margin:auto; width:fit-content;">
																					<a href="all_reviews.php?application_id=' . $row["id"] . '" class="tblEditBtn">
																						<i class="fa fa-eye"></i>
																					</a>
																				</div>
																			</td>
																			<td>
																				<div style="margin:auto; width:fit-content;">
																					<button style="border:none;" data-bs-toggle="modal" data-bs-target="#reviewModal" data-applicant-id="' . $row["applicant_id"] . '" data-application-id="' . $row["id"] . '"
																						class="tblEditBtn">
																						<i class="fa fa-gavel"></i>
																					</button>
																				</div>
																			</td>
																			
																		</tr>';
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
			var application_id = button.getAttribute('data-application-id')
			var applicant_id = button.getAttribute('data-applicant-id')
			console.log(application_id);

			var applicationInput = reviewModal.querySelector('#application_id')
			var applicantInput = reviewModal.querySelector('#applicant_id')

			applicationInput.value = application_id;
			applicantInput.value = applicant_id;
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