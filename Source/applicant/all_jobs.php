<?php require_once('../init/config.php') ?>
<?php require_once('inc/header.php') ?>

<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from einfosoft.com/templates/admin/smart/source/light/all_courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2022 06:32:15 GMT -->

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

    <style>
        .img-responsive {
            display: block;
            max-width: 100%;
            height: 15em;
        }
    </style>
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
                            <div class="page-title">All Jobs Posted</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li><a class="parent-item" href="#">Jobs</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">All Jobs Posted</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="card-box">
                        <div class="card-head">
                            <header>All Jobs Posted</header>
                        </div>
                        <div class="card-body ">
                            <!-- start course list -->
                            <div class="row">
                                <?php
                                $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                if ($conn->connect_error) {
                                    echo "ERROR ";
                                    die();
                                }
                                $applicant_id = $_SESSION['userdata']['id'];

                                $result = $conn->query("SELECT * FROM `applications` where applicant_id =" . $applicant_id . "");
                                $job_ids = array();
                                while ($application = $result->fetch_array(MYSQLI_ASSOC)) {
                                    array_push($job_ids, $application['job_id']);
                                }
                                $result2 = $conn->query("SELECT * FROM `jobs` WHERE`close` != 1");

                                while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
                                    $job_id = $row["id"];
                                    if  (!in_array($job_id,$job_ids,TRUE)){
                                    // echo $row["name"];

                                    echo ' <div class="col-lg-6 col-md-6 col-12 col-sm-6 ">
                                                        <div style="padding:20px; border:2px black solid; border-radius:25px; box-shadow:10px 5px 10px #bbbbbb;" class="blogThumb">
                                                            <p><span><i class="ti-alarm-clock"></i> <b>Position :</b> ' . $row["position"] . '</span></p>
                                                            <p><span><i class="ti-alarm-clock"></i> <b>Last Date to Apply:</b> ' . $row["last_date"] . '</span></p>
                                                                    <p><span><i class="ti-user"></i> <b>Description : </b> ' . $row["description"] . '</span></p>
                                                            <p><span><i class="ti-user"></i> <b>Department: </b> ' . $row["dept"] . '</span></p>
                                                            <p><span><i></i> <b>Eligibility Criteria:</b> ' . $row["eligibility"] . ' </span></p>
                                                            <p><span><i></i> <b>Salary Offered:</b> ' . $row["salary"] . '</span></p>
                                                            <p><span><i></i> <b>Department:</b> ' . $row["dept"] . '</span></p>
                                                            <div style="margin: auto; width:fit-content;" >
                                                                <a href="apply_job.php?job_id=' . $row["id"] . '" type="button"
                                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Apply</a>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                }
                                }

                                ?>
                            </div>
                            <!-- End course list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->
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