<?php
session_start();
if(isset($_SESSION["PhoneNumber"])){
    echo "ok";
}else
{
    echo "<script type='text/javascript'>document.location='http://localhost/revenuesure/'</script>";
}
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
    <title>RevenueSure</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Theme Styles -->

    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="index.php">

                    <span class="logo-default" >RevenueSure</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- start language menu -->
                    <li style="padding-top:10px">
                        <a href="transactions.html"><button type="button" >Your Transactions</button></a>
                    </li>


                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> <?php
                                    session_start();
                                    echo $_SESSION["PhoneNumber"];

                                    ?></span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default animated jello">

                            <li>
                                <a href="#">
                                    <i class="icon-settings"></i> Settings
                                </a>
                            </li>

                            <li class="divider"> </li>

                            <li>
                                <a href="../index.html">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->

                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <div class="sidebar-container">
            <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                <div id="remove-scroll">
                    <ul class="sidemenu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="sidebar-user-panel">
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="assets/img/kakamega.jpeg" class="img-circle user-img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p>Kakamega</p>
                                    <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> County</span></a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link nav-toggle"> <i class="material-icons">event</i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">business</i>
                                <span class="title">Unified Business Permit</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item   ">
                                    <a href="renew.php" class="nav-link ">
                                        <span class="title">Renew</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="register.php" class="nav-link ">
                                        <span class="title">Register</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="permit.php" class="nav-link ">
                                        <span class="title">Permit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="receipt.php" class="nav-link ">
                                        <span class="title">Receipt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">dashboard</i>
                                <span class="title">Land Rates</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item   ">
                                    <a href="pay.php" class="nav-link ">
                                        <span class="title">Pay</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="lrr.php" class="nav-link ">
                                        <span class="title">Receipt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">home</i>
                                <span class="title">Rent</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item   ">
                                    <a href="house.php" class="nav-link ">
                                        <span class="title">Houses</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="stalls.php" class="nav-link ">
                                        <span class="title">Stalls</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="rr.php" class="nav-link ">
                                        <span class="title">Receipt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">dashboard</i>
                                <span class="title">Parking Fees</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item   ">
                                    <a href="daily.php" class="nav-link ">
                                        <span class="title">Daily</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="penalties.php" class="nav-link ">
                                        <span class="title">Penalties</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="seasonal.php" class="nav-link ">
                                        <span class="title">Seasonal</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="print.php" class="nav-link ">
                                        <span class="title">Print Receipt</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="clamp.php" class="nav-link ">
                                        <span class="title">Clamping Receipt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="material-icons">style</i>
                                <span class="title">Utilities</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item   ">
                                    <a href="top.php" class="nav-link ">
                                        <span class="title">Hospital</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="balance.php" class="nav-link ">
                                        <span class="title">Water</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="statement.php" class="nav-link ">
                                        <span class="title">Electricity</span>
                                    </a>
                                </li>

                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Rent receipts </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Rent receipts</li>
                            </ol>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">

                                <div class="card-body" id="bar-parent1">
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                          <div class="form-group row">
                                              <label class="control-label col-md-3">Estate
                                                  <span class="required"> * </span>
                                              </label>
                                              <div class="col-md-4">
                                                  <select class="form-control" name="select">
                                                      <option value="">Select...</option>
                                                      <option value="Category 1">Estate 1</option>
                                                      <option value="Category 2">Estate 2</option>
                                                      <option value="Category 3">Estate 3</option>
                                                      <option value="Category 4">Estate 4</option>
                                                      <option value="Category 5">Estate 5</option>
                                                      <option value="Category 6">Estate 6</option>
                                                  </select>
                                              </div>
                                          </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">House Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="select">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">1 Bedroom</option>
                                                        <option value="Category 2">2 Bedroom</option>
                                                        <option value="Category 3">3 Bedroom</option>
                                                        <option value="Category 4">4 Bedroom</option>
                                                        <option value="Category 5">5 Bedroom</option>
                                                        <option value="Category 6">6 Bedroom</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">House Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="select">
                                                        <option value="">Select...</option>
                                                        <option value="Category 1">100002563</option>
                                                        <option value="Category 2">100002563</option>
                                                        <option value="Category 3">100002563</option>
                                                        <option value="Category 4">100002563</option>
                                                        <option value="Category 5">100002563</option>
                                                        <option value="Category 6">100002563</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                      <div class="form-group">
                                            <div class="offset-md-3 col-md-9">
                                                <button type="submit" class="btn btn-info">Submit</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
            </div>
            <!-- end page content -->

        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy;RevenueSure
                <a href="mailto:info@zaka.co.ke" target="_top" class="makerCss">RevenueSure</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.min.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="assets/js/pages/ui/animations.js" ></script>
    <!-- end js include path -->
</body>
</html>
