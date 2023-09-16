<?php require_once('../init/config.php') ?>

<?php require_once('inc/header.php') ?>

<!DOCTYPE html>

<html lang="en">

<!-- BEGIN HEAD -->


<?php

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    echo "ERROR ";
    die();
}
// $result3 = $conn->query("DELETE FROM `review_access` WHERE job_id = $job_id");
$dept_id = $_SESSION["userdata"]["dept_id"];
$result1 = $conn->query("SELECT * FROM `members` WHERE `dept_id` = $dept_id ");
(int)$total_members = 0;
while ($result1->fetch_array(MYSQLI_ASSOC)) {
    // echo $row["name"];
    $total_members++;
}
$result2 = $conn->query("SELECT * FROM `jobs` WHERE dept_id = '$dept_id' AND close = '0' ");
(int)$jobs = 0;
while ($result2->fetch_array(MYSQLI_ASSOC)) {
    $jobs++;
}
$result2 = $conn->query("SELECT * FROM `applications` ");
(int)$applications = 0;
while ($result2->fetch_array(MYSQLI_ASSOC)) {
    $applications++;
}

?>






<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1" name="viewport" />



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

    <link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">

    <!-- Material Design Lite CSS -->

    <link rel="stylesheet" href="../assets/plugins/material/material.min.css">

    <link rel="stylesheet" href="../assets/css/material_style.css">

    <!-- inbox style -->

    <link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->

    <link href="../assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />

    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />

    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <link href="../assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />

    <!-- favicon -->

    <link rel="shortcut icon" href="../../images/uni-logo.svg" />

</head>

<!-- END HEAD -->



<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-red">

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

                    <li><a href="#" class="menu-toggler sidebar-toggler"><i data-feather="menu"></i></a></li>

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

                            <div class="page-title">Dashboard</div>

                        </div>

                        <ol class="breadcrumb page-breadcrumb pull-right">

                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i
                                    class="fa fa-angle-right"></i>

                            </li>

                            <li class="active">Dashboard</li>

                        </ol>

                    </div>

                </div>

                <!-- start widget -->

                <div class="state-overview">

                    <div class="row">

                        <div class="col-xl-3 col-md-6 col-12">

                            <div class="info-box bg-b-green">

                                <span class="info-box-icon push-bottom"><i data-feather="users"></i></span>

                                <div class="info-box-content">

                                    <span class="info-box-text">Total Members</span>

                                    <span class="info-box-number"> <?php echo $total_members ?></span>

                                    <!-- <div class="progress">

                                        <div class="progress-bar" style="width: 45%"></div>

                                    </div>

                                    <span class="progress-description">

											45% Increase in 28 Days

										</span> -->

                                </div>

                                <!-- /.info-box-content -->

                            </div>

                            <!-- /.info-box -->

                        </div>

                        <!-- /.col -->

                        <div class="col-xl-3 col-md-6 col-12">

                            <div class="info-box bg-b-yellow">

                                <span class="info-box-icon push-bottom"><i data-feather="user"></i></span>

                                <div class="info-box-content">

                                    <span class="info-box-text">Total Jobs Open </span>

                                    <span class="info-box-number"><?php echo $jobs ?></span>

                                </div>

                                <!-- /.info-box-content -->

                            </div>

                            <!-- /.info-box -->

                        </div>

                        <!-- /.col -->
                        <!-- /.col -->

                        <!--  -->

                        <!-- /.col -->

                    </div>

                </div>

                <!-- end widget -->

                <!-- chart start -->

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card-box">

                            <div class="card-head">

                                <header>Open Jobs</header>

                                <button id="panel-button5" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                    data-upgraded=",MaterialButton">

                                    <i class="material-icons">more_vert</i>

                                </button>

                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                    data-mdl-for="panel-button5">

                                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action

                                    </li>

                                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action

                                    </li>

                                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here

                                    </li>

                                </ul>

                            </div>

                            <div class="card-body ">

                                <div class="table-responsive">

                                    <table class="table table-striped custom-table table-hover">

                                        <thead>

                                            <tr>

                                                <th>Position</th>

                                                <th>Department</th>

                                                <th>Salary</th>

                                                <th>Last Date</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php

                                            $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                                            if ($conn->connect_error) {
                                                echo "ERROR ";
                                                die();
                                            }
                                            // $result3 = $conn->query("DELETE FROM `review_access` WHERE job_id = $job_id");

                                            $result4 = $conn->query("SELECT * FROM `jobs` WHERe `close` != 1 AND dept_id = '$dept_id'");

                                            while ($job_det = $result4->fetch_array(MYSQLI_ASSOC)) {
                                                // echo $row["name"];
                                                echo '<tr>

                                            

                                            <td>' . $job_det["position"] . '</td>

                                            <td>' . $job_det["dept"] . '</td>
                                            <td>' . $job_det["salary"] . '</td>

                                            <td>' . $job_det["last_date"] . '</td>


                                            

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

    <script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>

    <script src="../assets/js/pages/sparkline/sparkline-data.js"></script>

    <!-- Common js-->

    <script src="../assets/js/app.js"></script>

    <script src="../assets/js/layout.js"></script>

    <script src="../assets/js/theme-color.js"></script>

    <!-- material -->

    <script src="../assets/plugins/material/material.min.js"></script>

    <!--apex chart-->

    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>

    <script src="../assets/js/pages/chart/apex/home-data.js"></script>

    <!-- summernote -->

    <script src="../assets/plugins/summernote/summernote.js"></script>

    <script src="../assets/js/pages/summernote/summernote-data.js"></script>
    <script>
    function delete_member(element, member_id) {
        $.ajax({
            url: _base_url_ + 'classes/Delete.php?delete=member',
            method: 'POST',
            data: {
                "member_id": member_id
            },
            error: err => {
                console.log(err);
                alert("fail1");

            },
            success: function(resp) {
                if (resp) {
                    // console.log(resp);
                    resp = JSON.parse(resp)
                    if (resp.status == 'success') {
                        alert("Success");
                    } else if (resp.status == 'incorrect') {
                        alert("fail2");
                    }
                    end_loader()
                }
            }
        })
    }
    </script>
    <!-- end js include path -->

</body>







</html>