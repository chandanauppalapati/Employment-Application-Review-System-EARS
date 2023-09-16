<?php require_once('../init/config.php') ?>

<?php require_once('inc/header.php') ?>

<?php 
    redirect('applicant/all_jobs.php');

?>

<!DOCTYPE html>

<html lang="en">

<!-- BEGIN HEAD -->

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



<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-red">

    <div class="page-wrapper">

        <!-- start header -->

        <div class="page-header navbar navbar-fixed-top">

            <div class="page-header-inner ">

                <!-- logo start -->

                <div class="page-logo">

                    <a href="index.php">

                        <!-- <span class="logo-icon material-icons fa-rotate-45">school</span> -->

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

                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

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

                                    <span class="info-box-text">Total Students</span>

                                    <span class="info-box-number">450</span>

                                    <div class="progress">

                                        <div class="progress-bar" style="width: 45%"></div>

                                    </div>

                                    <span class="progress-description">

                                        45% Increase in 28 Days

                                    </span>

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

                                    <span class="info-box-text">New Students</span>

                                    <span class="info-box-number">155</span>

                                    <div class="progress">

                                        <div class="progress-bar" style="width: 40%"></div>

                                    </div>

                                    <span class="progress-description">

                                        40% Increase in 28 Days

                                    </span>

                                </div>

                                <!-- /.info-box-content -->

                            </div>

                            <!-- /.info-box -->

                        </div>

                        <!-- /.col -->

                        <div class="col-xl-3 col-md-6 col-12">

                            <div class="info-box bg-b-blue">

                                <span class="info-box-icon push-bottom"><i data-feather="book"></i></span>

                                <div class="info-box-content">

                                    <span class="info-box-text">Total Course</span>

                                    <span class="info-box-number">52</span>

                                    <div class="progress">

                                        <div class="progress-bar" style="width: 85%"></div>

                                    </div>

                                    <span class="progress-description">

                                        85% Increase in 28 Days

                                    </span>

                                </div>

                                <!-- /.info-box-content -->

                            </div>

                            <!-- /.info-box -->

                        </div>

                        <!-- /.col -->

                        <div class="col-xl-3 col-md-6 col-12">

                            <div class="info-box bg-b-pink">

                                <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>

                                <div class="info-box-content">

                                    <span class="info-box-text">Fees Collection</span>

                                    <span class="info-box-number">13,921</span><span>$</span>

                                    <div class="progress">

                                        <div class="progress-bar" style="width: 50%"></div>

                                    </div>

                                    <span class="progress-description">

                                        50% Increase in 28 Days

                                    </span>

                                </div>

                                <!-- /.info-box-content -->

                            </div>

                            <!-- /.info-box -->

                        </div>

                        <!-- /.col -->

                    </div>

                </div>

                <!-- end widget -->

                <!-- chart start -->

                <div class="row">

                    <div class="col-sm-6">

                        <div class="card card-box">

                            <div class="card-head">

                                <header>University Survey</header>

                                <div class="tools">

                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>

                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>

                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>

                                </div>

                            </div>

                            <div class="card-body">

                                <div class="recent-report__chart">

                                    <div id="chart1"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="card card-box">

                            <div class="card-head">

                                <header>University Survey</header>

                                <div class="tools">

                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>

                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>

                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>

                                </div>

                            </div>

                            <div class="card-body">

                                <div class="recent-report__chart">

                                    <div id="chart2"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Chart end -->

                <div class="row">

                    <div class="col-lg-9 col-md-12 col-sm-12 col-12">

                        <div class="card-box">

                            <div class="card-head">

                                <header>Teachers List</header>

                            </div>

                            <div class="card-body ">

                                <div class="table-responsive">

                                    <table class="table table-hover dashboard-task-infos">

                                        <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Name</th>

                                                <th>Department</th>

                                                <th>Email</th>

                                                <th>Class Name</th>

                                                <th>Subject</th>

                                                <th>Rating</th>

                                                <th>Action</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user1.jpg" alt="">

                                                </td>

                                                <td>John Doe</td>

                                                <td>Science</td>

                                                <td>xyz@email.com</td>

                                                <td>Class A</td>

                                                <td>Biology</td>

                                                <td>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="far fa-star col-orange"></i>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user4.jpg" alt="">

                                                </td>

                                                <td>Sarah Smith</td>

                                                <td>Mathematics</td>

                                                <td>xyz@email.com</td>

                                                <td>Class B</td>

                                                <td>Mathematics</td>

                                                <td>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star-half-alt col-orange"></i>

                                                    <i class="far fa-star col-orange"></i>

                                                    <i class="far fa-star col-orange"></i>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user6.jpg" alt="">

                                                </td>

                                                <td>Airi Satou</td>

                                                <td>Music</td>

                                                <td>xyz@email.com</td>

                                                <td>Class D</td>

                                                <td>Classical Music</td>

                                                <td>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star-half-alt col-orange"></i>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>



                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user5.jpg" alt="">

                                                </td>

                                                <td>Ashton Cox</td>

                                                <td>Dance</td>

                                                <td>xyz@email.com</td>

                                                <td>Class A</td>

                                                <td>Dancing</td>

                                                <td>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user7.jpg" alt="">

                                                </td>

                                                <td>Cara Stevens</td>

                                                <td>Commerce</td>

                                                <td>xyz@email.com</td>

                                                <td>Class F</td>

                                                <td>Accounting</td>

                                                <td>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="far fa-star col-orange"></i>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user8.jpg" alt="">

                                                </td>

                                                <td>Angelica Ramos</td>

                                                <td>Social Science</td>

                                                <td>xyz@email.com</td>

                                                <td>Class B</td>

                                                <td>History</td>

                                                <td>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="far fa-star col-orange"></i>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user9.jpg" alt="">

                                                </td>

                                                <td>Pooja Sharma</td>

                                                <td>Science</td>

                                                <td>xyz@email.com</td>

                                                <td>Class A</td>

                                                <td>Biology</td>

                                                <td>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="fas fa-star col-orange"></i>

                                                    <i class="far fa-star col-orange"></i>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>



                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-sm-12 col-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="box-title"><small class="pull-right small-lbl-green"><i class="far fa-arrow-alt-circle-up"></i> Good</small> Student Performance

                                </div>

                                <div class="mt-3">

                                    <div class="stat-item">

                                        <div class="h6">Overall Growth</div> <b>35.80%</b>

                                    </div>

                                    <div class="stat-item">

                                        <div class="h6">Montly</div> <b>45.20%</b>

                                    </div>

                                    <div class="stat-item">

                                        <div class="h6">Day</div> <b>5.50%</b>

                                    </div>

                                </div>

                                <div id="schart1">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="card-box">

                            <div class="card-head">

                                <header>Exam Toppers</header>

                                <button id="panel-button5" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">

                                    <i class="material-icons">more_vert</i>

                                </button>

                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button5">

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

                                                <th>Roll No</th>

                                                <th>Name</th>

                                                <th>Graph</th>

                                                <th>Action</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>

                                                <td>23</td>

                                                <td>John Smith</td>

                                                <td>

                                                    <div id="sparkline"></div>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td>12</td>

                                                <td>Sneha Pandit</td>

                                                <td>

                                                    <div id="sparkline1"></div>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td>45</td>

                                                <td>Sarah Smith</td>

                                                <td>

                                                    <div id="sparkline2"></div>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td>34</td>

                                                <td>John Deo</td>

                                                <td>

                                                    <div id="sparkline3"></div>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td>15</td>

                                                <td>Jay Soni</td>

                                                <td>

                                                    <div id="sparkline4"></div>

                                                </td>

                                                <td>

                                                    <a href="javascript:void(0)" class="tblEditBtn">

                                                        <i class="fa fa-pencil"></i>

                                                    </a>

                                                    <a href="javascript:void(0)" class="tblDelBtn">

                                                        <i class="fa fa-trash-o"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="card-box">

                            <div class="card-head">

                                <header>Recent Transactions</header>

                                <button id="panel-button8" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">

                                    <i class="material-icons">more_vert</i>

                                </button>

                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button8">

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

                                    <table class="table table-hover">

                                        <tbody>

                                            <tr>

                                                <th>#</th>

                                                <th>Order No</th>

                                                <th>Student Name</th>

                                                <th>Status</th>

                                                <th>Amount</th>

                                                <th>Receipt</th>

                                                <th>Edit</th>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user10.jpg" alt="">

                                                </td>

                                                <td>XY56987</td>

                                                <td>John Deo</td>

                                                <td><i class="fas fa-circle col-green me-2"></i>Confirm</td>

                                                <td>$955</td>

                                                <td><i class="fas fa-file-pdf col-red"></i></td>

                                                <td>

                                                    <a data-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="fas fa-pencil-alt"></i></a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user3.jpg" alt="">

                                                </td>

                                                <td>XY12587</td>

                                                <td>Sarah Smith</td>

                                                <td><i class="fas fa-circle col-orange me-2"></i>Payment Failed

                                                </td>

                                                <td>$215</td>

                                                <td><i class="fas fa-file-pdf col-red"></i></td>

                                                <td>

                                                    <a data-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="fas fa-pencil-alt"></i></a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user7.jpg" alt="">

                                                </td>

                                                <td>XY58987</td>

                                                <td>John Doe</td>

                                                <td><i class="fas fa-circle col-green me-2"></i>Confirm</td>

                                                <td>$125</td>

                                                <td><i class="fas fa-file-pdf col-red"></i></td>

                                                <td>

                                                    <a data-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="fas fa-pencil-alt"></i></a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user2.jpg" alt="">

                                                </td>

                                                <td>XY87452</td>

                                                <td>Sagar Patel</td>

                                                <td><i class="fas fa-circle col-green me-2"></i>Confirm</td>

                                                <td>$498</td>

                                                <td><i class="fas fa-file-pdf col-red"></i></td>

                                                <td>

                                                    <a data-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="fas fa-pencil-alt"></i></a>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td class="patient-img">

                                                    <img src="../assets/img/user/user8.jpg" alt="">

                                                </td>

                                                <td>XY87452</td>

                                                <td>Sagar Patel</td>

                                                <td><i class="fas fa-circle col-green me-2"></i>Confirm</td>

                                                <td>$498</td>

                                                <td><i class="fas fa-file-pdf col-red"></i></td>

                                                <td>

                                                    <a data-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="fas fa-pencil-alt"></i></a>

                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <!-- Quick Mail start -->

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="inbox">

                            <div class="card">

                                <div class="card-body no-padding height-9">

                                    <div class="inbox-body">

                                        <div class="mail-list">

                                            <div class="compose-mail">

                                                <form method="post">

                                                    <div class="email-form">

                                                        <label for="to" class="">To:</label> <input type="text" tabindex="1" id="to" class="form-control itemField">

                                                        <div class="compose-options">

                                                            <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a> <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>

                                                        </div>

                                                    </div>

                                                    <div class="email-form hidden">

                                                        <label for="cc" class="">Cc:</label> <input type="text" tabindex="2" id="cc" class="form-control itemField">

                                                    </div>

                                                    <div class="email-form hidden">

                                                        <label for="bcc" class="">Bcc:</label> <input type="text" tabindex="2" id="bcc" class="form-control itemField">

                                                    </div>

                                                    <div class="email-form">

                                                        <label for="subject" class="">Subject:</label> <input type="text" tabindex="1" id="subject" class="form-control itemField">

                                                    </div>

                                                    <div class="mt-4">

                                                        <div id="summernote"></div>

                                                        <input type="file" class="default" multiple>

                                                    </div>

                                                    <div class="box-footer clearfix">

                                                        <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">

                                                            Send <i class="fa fa-paper-plane-o"></i>

                                                        </button>

                                                    </div>

                                                </form>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Quick Mail end -->

                    <!-- Activity feed start -->

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="card-box">

                            <div class="card-head">

                                <header>Activity Feed</header>

                                <button id="feedMenu" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">

                                    <i class="material-icons">more_vert</i>

                                </button>

                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="feedMenu">

                                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action

                                    </li>

                                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action

                                    </li>

                                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here

                                    </li>

                                </ul>

                            </div>

                            <div class="card-body ">

                                <ul class="feedBody">

                                    <li class="active-feed">

                                        <div class="feed-user-img">

                                            <img src="../assets/img/user/user1.jpg" class="img-radius " alt="User-Profile-Image">

                                        </div>

                                        <h6>

                                            <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small class="text-muted">6 hours ago</small>

                                        </h6>

                                        <p class="m-b-15 m-t-15">

                                            hii John, I have upload doc related to task.

                                        </p>

                                    </li>

                                    <li class="diactive-feed">

                                        <div class="feed-user-img">

                                            <img src="../assets/img/user/user2.jpg" class="img-radius " alt="User-Profile-Image">

                                        </div>

                                        <h6>

                                            <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small class="text-muted">5 hours

                                                ago</small>

                                        </h6>

                                        <p class="m-b-15 m-t-15">

                                            Please do as specify. Let me know if you have any query.

                                        </p>

                                    </li>

                                    <li class="diactive-feed">

                                        <div class="feed-user-img">

                                            <img src="../assets/img/user/user3.jpg" class="img-radius " alt="User-Profile-Image">

                                        </div>

                                        <h6>

                                            <span class="feedLblStyle lblCommentStyle">comment</span> Lina Smith

                                            <small class="text-muted">6 hours ago</small>

                                        </h6>

                                        <p class="m-b-15 m-t-15">

                                            Hey, How are you??

                                        </p>

                                    </li>

                                    <li class="active-feed">

                                        <div class="feed-user-img">

                                            <img src="../assets/img/user/user4.jpg" class="img-radius " alt="User-Profile-Image">

                                        </div>

                                        <h6>

                                            <span class="feedLblStyle lblReplyStyle">Reply</span> Jacob Ryan

                                            <small class="text-muted">7 hours ago</small>

                                        </h6>

                                        <p class="m-b-15 m-t-15">

                                            I am fine. You??

                                        </p>

                                    </li>

                                    <li class="active-feed">

                                        <div class="feed-user-img">

                                            <img src="../assets/img/user/user5.jpg" class="img-radius " alt="User-Profile-Image">

                                        </div>

                                        <h6>

                                            <span class="feedLblStyle lblFileStyle">File</span> Sarah Smith <small class="text-muted">6 hours ago</small>

                                        </h6>

                                        <p class="m-b-15 m-t-15">

                                            hii John, I have upload doc related to task.

                                        </p>

                                    </li>

                                    <li class="diactive-feed">

                                        <div class="feed-user-img">

                                            <img src="../assets/img/user/user6.jpg" class="img-radius " alt="User-Profile-Image">

                                        </div>

                                        <h6>

                                            <span class="feedLblStyle lblTaskStyle">Task </span> Jalpa Joshi<small class="text-muted">5 hours

                                                ago</small>

                                        </h6>

                                        <p class="m-b-15 m-t-15">

                                            Please do as specify. Let me know if you have any query.

                                        </p>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <!-- Activity feed end -->

                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-12 col-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="box-title"><small class="pull-right small-lbl-red"><i class="far fa-arrow-alt-circle-down"></i> 12% Lower</small> New Admissions

                                </div>

                                <div class="mt-3">

                                    <div class="stat-item">

                                        <div class="h6">New Admissions</div> <b>14.80%</b>

                                    </div>

                                </div>

                                <div id="schart2">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 col-sm-12 col-12">

                        <div class="card">

                            <div class="card-body">

                                <div class="box-title"><small class="pull-right small-lbl-green"><i class="far fa-arrow-alt-circle-up"></i> Good

                                        Performance</small>Student Result</div>

                                <div class="mt-3">

                                    <div class="stat-item">

                                        <div class="h6">Mathematics</div> <b>86%</b>

                                    </div>

                                    <div class="stat-item">

                                        <div class="h6">Science</div> <b>64%</b>

                                    </div>

                                </div>

                                <div id="schart3">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="card-box">

                            <div class="card-head">

                                <header>Todo List</header>

                                <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">

                                    <i class="material-icons">more_vert</i>

                                </button>

                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">

                                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action

                                    </li>

                                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action

                                    </li>

                                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here

                                    </li>

                                </ul>

                            </div>

                            <div class="card-body ">

                                <ul class="to-do-list ui-sortable" id="sortable-todo">

                                    <li class="clearfix">

                                        <div class="todo-check pull-left">

                                            <input type="checkbox" value="None" id="todo-check1">

                                            <label for="todo-check1"></label>

                                        </div>

                                        <p class="todo-title">Add fees details in system

                                        </p>

                                        <div class="todo-actionlist pull-right clearfix">

                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>

                                        </div>

                                    </li>

                                    <li class="clearfix">

                                        <div class="todo-check pull-left">

                                            <input type="checkbox" value="None" id="todo-check2">

                                            <label for="todo-check2"></label>

                                        </div>

                                        <p class="todo-title">Announcement for holiday

                                        </p>

                                        <div class="todo-actionlist pull-right clearfix">

                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>

                                        </div>

                                    </li>

                                    <li class="clearfix">

                                        <div class="todo-check pull-left">

                                            <input type="checkbox" value="None" id="todo-check3">

                                            <label for="todo-check3"></label>

                                        </div>

                                        <p class="todo-title">call bus driver</p>

                                        <div class="todo-actionlist pull-right clearfix">

                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>

                                        </div>

                                    </li>

                                    <li class="clearfix">

                                        <div class="todo-check pull-left">

                                            <input type="checkbox" value="None" id="todo-check4">

                                            <label for="todo-check4"></label>

                                        </div>

                                        <p class="todo-title">School picnic</p>

                                        <div class="todo-actionlist pull-right clearfix">

                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>

                                        </div>

                                    </li>

                                    <li class="clearfix">

                                        <div class="todo-check pull-left">

                                            <input type="checkbox" value="None" id="todo-check5">

                                            <label for="todo-check5"></label>

                                        </div>

                                        <p class="todo-title">Exam time table generate

                                        </p>

                                        <div class="todo-actionlist pull-right clearfix">

                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>

                                        </div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- start new student list -->

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <div class="card  card-box">

                            <div class="card-head">

                                <header>New Student List</header>

                                <div class="tools">

                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>

                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>

                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>

                                </div>

                            </div>

                            <div class="card-body ">

                                <div class="table-wrap">

                                    <div class="table-responsive">

                                        <table class="table display product-overview mb-30" id="support_table">

                                            <thead>

                                                <tr>

                                                    <th>No</th>

                                                    <th>Name</th>

                                                    <th>Assigned Professor</th>

                                                    <th>Date Of Admit</th>

                                                    <th>Fees</th>

                                                    <th>Branch</th>

                                                    <th>Edit</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                <tr>

                                                    <td>1</td>

                                                    <td>Jens Brincker</td>

                                                    <td>Kenny Josh</td>

                                                    <td>27/05/2016</td>

                                                    <td>

                                                        <span class="label label-sm label-success">paid</span>

                                                    </td>

                                                    <td>Mechanical</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>2</td>

                                                    <td>Mark Hay</td>

                                                    <td> Mark</td>

                                                    <td>26/05/2017</td>

                                                    <td>

                                                        <span class="label label-sm label-warning">unpaid

                                                        </span>

                                                    </td>

                                                    <td>Science</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>3</td>

                                                    <td>Anthony Davie</td>

                                                    <td>Cinnabar</td>

                                                    <td>21/05/2016</td>

                                                    <td>

                                                        <span class="label label-sm label-success ">paid</span>

                                                    </td>

                                                    <td>Commerce</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>4</td>

                                                    <td>David Perry</td>

                                                    <td>Felix </td>

                                                    <td>20/04/2016</td>

                                                    <td>

                                                        <span class="label label-sm label-danger">unpaid</span>

                                                    </td>

                                                    <td>Mechanical</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>5</td>

                                                    <td>Anthony Davie</td>

                                                    <td>Beryl</td>

                                                    <td>24/05/2016</td>

                                                    <td>

                                                        <span class="label label-sm label-success ">paid</span>

                                                    </td>

                                                    <td>M.B.A.</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>6</td>

                                                    <td>Alan Gilchrist</td>

                                                    <td>Joshep</td>

                                                    <td>22/05/2016</td>

                                                    <td>

                                                        <span class="label label-sm label-warning ">unpaid</span>

                                                    </td>

                                                    <td>Science</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>7</td>

                                                    <td>Mark Hay</td>

                                                    <td>Jayesh</td>

                                                    <td>18/06/2016</td>

                                                    <td>

                                                        <span class="label label-sm label-success ">paid</span>

                                                    </td>

                                                    <td>Commerce</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>8</td>

                                                    <td>Sue Woodger</td>

                                                    <td>Sharma</td>

                                                    <td>17/05/2016</td>

                                                    <td>

                                                        <span class="label label-sm label-danger">unpaid</span>

                                                    </td>

                                                    <td>Mechanical</td>

                                                    <td>

                                                        <a href="javascript:void(0)" class="tblEditBtn">

                                                            <i class="fa fa-pencil"></i>

                                                        </a>

                                                        <a href="javascript:void(0)" class="tblDelBtn">

                                                            <i class="fa fa-trash-o"></i>

                                                        </a>

                                                    </td>

                                                </tr>

                                            </tbody>

                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- end new student list -->

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

    <!-- end js include path -->

</body>







</html>