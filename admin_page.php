<?php
session_start();
	if(!isset($_SESSION['mem_id'])){
		echo "Please Login!";
    header("location:login.php");
		exit();
	}

	if($_SESSION['mtype_id'] != "1" AND $_SESSION['mtype_id'] != "2")
	{
		echo "This page for Admin only!";
		exit();
	}

  include_once('libs/connect.php');

	$query = "SELECT * FROM tbl_member WHERE mem_id = '".$_SESSION['mem_id']."' ";
	$res = mysqli_query($connection,$query);
	$row = mysqli_fetch_array($res);
?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin : Volunteer</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">My Admin</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>


                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>
					 <li  >
                        <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                    </li>
                     <li  >
                        <a   href="register.php"><i class="fa fa-laptop fa-3x"></i> Register</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                      </li>
                  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>
                        <h5>Welcome <?php echo $row["mem_fname"];?>. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row text-center pad-top">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                         <div class="div-square">
                              <a href="blank.html" >
                   <i class="fa fa-clipboard fa-5x"></i>
                         <h4>สรุปผลการดำเนินงาน</h4>
                         </a>
                         </div>


                     </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-calendar fa-5x"></i>
                          <h4>ปฏิทินงาน</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-edit fa-5x"></i>
                          <h4>สร้างฟอร์ม</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-users fa-5x"></i>
                          <h4>ประวัติการใช้งาน</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-user fa-5x"></i>
                          <h4>เพิ่มข้อมูลบุคลากร</h4>
                          </a>
                          </div>
                      </div>
                    </div>
                     <!-- /. ROW  -->
                    <div class="row text-center pad-top">
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                                 <a href="blank.html" >
                      <i class="fa fa-circle-o-notch fa-5x"></i>
                            <h4>Check Data</h4>
                            </a>
                            </div>
                        </div>


                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-gear fa-5x"></i>
                          <h4>Settings</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-wechat fa-5x"></i>
                          <h4>Live Talk</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-bell-o fa-5x"></i>
                          <h4>Notifications </h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                              <i class="fa fa-rocket fa-5x"></i>
                          <h4>Launch</h4>
                          </a>
                          </div>
                      </div>
                    </div>

                      <!-- /. ROW  -->
                     <div class="row text-center pad-top">


                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-envelope-o fa-5x"></i>
                          <h4>Mail Box</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-lightbulb-o fa-5x"></i>
                          <h4>New Issues</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-users fa-5x"></i>
                          <h4>See Users</h4>
                          </a>
                          </div>


                      </div>
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="#" >
                    <i class="fa fa-comments-o fa-5x"></i>
                          <h4>Support</h4>
                          </a>
                          </div>


                      </div>
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                          <div class="div-square">
                               <a href="blank.html" >
                    <i class="fa fa-circle-o-notch fa-5x"></i>
                          <h4>Check Data</h4>
                          </a>
                          </div>


                      </div>

                    </div>
                     <!-- /. ROW  -->

                    <div class="row">
                        <div class="col-lg-12 ">
                    <br/>
                            <div class="alert alert-danger">
                                 <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                            </div>

                        </div>
                        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <!-- <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script> -->
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
<?php
mysqli_close($connection);
?>
