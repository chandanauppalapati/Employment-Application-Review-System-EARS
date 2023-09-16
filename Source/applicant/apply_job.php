<?php require_once('../init/config.php') ?>

<?php require_once('inc/header.php') ?>



<?php

$job_id = $_GET["job_id"];

?>


<?php if (isset($_POST['job_applied'])) : ?>
    <?php
    $target_dir = "../private/files/pdfs/";
    $target_dir_link = "../private/files/pdfs/";
    $resumefileType = strtolower(pathinfo($_FILES["resume"]["name"], PATHINFO_EXTENSION));
    $resume_file = $target_dir . $job_id . "-" . $_SESSION['userdata']['id'] . "-resume." . $resumefileType;
    $resume_file_link = $target_dir_link . $job_id . "-" . $_SESSION['userdata']['id'] . "-resume." . $resumefileType;
    $cletterfileType = strtolower(pathinfo($_FILES["c_letter"]["name"], PATHINFO_EXTENSION));
    $cletter_file = $target_dir . $job_id . "-" . $_SESSION['userdata']['id'] . "-cover-letter." . $cletterfileType;
    $cletter_file_link = $target_dir_link . $job_id . "-" . $_SESSION['userdata']['id'] . "-cover-letter." . $cletterfileType;
    $uploadOk = 1;
    $skills = $_POST["skills"];

    if ($uploadOk == 0) {
        echo  '<script> alert("Sorry, your file was not uploaded.");</script>';
    } else {
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resume_file) && move_uploaded_file($_FILES["c_letter"]["tmp_name"], $cletter_file)) {
            $applicant_id = $_SESSION['userdata']['id'];
            $applicant_name = $_SESSION['userdata']['name'];
            $result = "INSERT INTO `applications`(`job_id`, `applicant_id`, `skills`, `resume_link`, `c_letter_link`, `status`, `applicant_name`) VALUES ('$job_id','$applicant_id', '$skills','$resume_file_link','$cletter_file_link','Application Submitted','$applicant_name')";
            if ($conn->query($result) === TRUE) {
                echo '<script>alert("Applied for Job Successfully")</script>';
                redirect('applicant/applied_jobs.php');
            } else {
                echo '<script>alert("Something Went Wrong")</script>';
                die();
            }
        } else {
            echo '<script>alert("Something Went Wrong")</script>';
        }
    }
    ?>

<?php endif; ?>

<?php

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    echo "ERROR ";
    die();
}

$result = $conn->query("SELECT * FROM `jobs` WHERE `id` = $job_id");
$row = $result->fetch_array(MYSQLI_ASSOC);

// echo '<script> alert("Project ID = '.$row["p_name"].'");</script>'

?>


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
    <!-- dropzone -->
    <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
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
                            <div class="page-title">Job Application</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Jobs</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Job Application</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div style="margin: auto;" class="col-md-10">
                                <?php
                                echo ' <div class="col-lg-12 col-md-12 col-12 col-sm-12 ">
                            <div style="padding:20px; border:2px black solid; border-radius:25px; box-shadow:10px 5px 10px #bbbbbb;" class="blogThumb">
                                    <p><span><i class="ti-alarm-clock"></i> <b>Position :</b> ' . $row["position"] . '</span></p>
                                    <p><span><i class="ti-alarm-clock"></i> <b>Last Date to Apply:</b> ' . $row["last_date"] . '</span></p>
                                            <p><span><i class="ti-user"></i> <b>Description : </b> ' . $row["description"] . '</span></p>
                                    <p><span><i class="ti-user"></i> <b>Department: </b> ' . $row["dept"] . '</span></p>
                                    <p><span><i></i> <b>Eligibility Criteria:</b> ' . $row["eligibility"] . ' </span></p>
                                    <p><span><i></i> <b>Salary Offered:</b> ' . $row["salary"] . '</span></p>
                                </div>
                            </div>
                        </div>';
                                ?>
                            </div>

                        </div>
                        <!-- BEGIN PROFILE CONTENT -->
                        <div class="profile-content">
                            <form method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="job_applied" value="1" />

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <div class="card-head">
                                                <header>Enter Your Details </header>
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
                                                <div class="col-lg-12 p-t-20">
                                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                        <textarea class="mdl-textfield__input" type="text" name="skills" required></textarea>
                                                        <label class="mdl-textfield__label">Skills</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 p-t-20">
                                                    <label class="control-label col-md-3">Upload Resume
                                                    </label>
                                                    <div class="col-md-12">
                                                        <input type="file" id="id_dropzone" name="resume" class="dropzone" required></input>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 p-t-20">
                                                    <label class="control-label col-md-6">Upload Cover-Letter
                                                    </label>
                                                    <div class="col-md-12">
                                                        <input type="file" id="id_dropzone2" name="c_letter" class="dropzone" required></input>
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
                        <!-- END PROFILE CONTENT -->
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
    </div>


    <!-- start js include path -->
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
    <script src="../assets/js/pages/material-select/getmdl-select.js"></script>
    <script src="../assets/plugins/flatpicker/js/flatpicker.min.js"></script>
    <script src="../assets/js/pages/date-time/date-time.init.js"></script>
    <script src="../assets/js/pages/validation/form-validation.js"></script>
    <script src="../assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="../assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
    <!-- dropzone -->
    <!-- <script src="../assets/plugins/dropzone/dropzone.js"></script>
	<script src="../assets/plugins/dropzone/dropzone-call.js"></script> -->
    <!-- end js include path -->
</body>



</html>