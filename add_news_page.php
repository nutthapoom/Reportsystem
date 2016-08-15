<?php
  include_once('libs/connect.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Register : Volunteer</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">Binary admin</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>


                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
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
                        <a class="active-menu"    href="register.php"><i class="fa fa-laptop fa-3x"></i>เพิ่มข้อมูลบุคลากร</a>
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
                        <a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
              <div class="row">
                <div class="col-md-12">
                  <h2>ข้อมูลข่าวสาร</h2>
                </div>
              </div>
                 <!-- /. ROW  -->
            <hr />
          <form class="form-horizontal" action="insert_member.php" method="post"  id="contact_form" enctype="multipart/form-data">
            <fieldset>
              <div class="row">
        <div class="col-md-1 col-sm-1">

        </div>
        <div class="col-md-10 col-sm-10">
            <div class="panel panel-info" id="delay_edit">
                <div class="panel-heading">
                    บันทึก แก้ไข ข้อมูลข่าวสาร
                </div>
                <div class="panel-body">
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">หัวข้อข่าว :</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="side" placeholder="ข้อมูลด้านกิจกรรม" class="form-control" type="password">
                      </div>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">เนื้อหาข่าว :</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <textarea class="form-control" rows="5" name="side" placeholder="รายละเอียดข่าวสาร"></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- File input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">รูปข่าว :</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div>
                        <input type="file">
                      </div>
                    </div>
                  </div>
                  <!-- Button -->
                  <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-warning" >บันทึก <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                    <span style="color:blue;">*กรุณากรอกข้อมูลให้ถูกต้อง ครบถ้วน</span>
                </div>
              </div>
            </div>
            <div class="col-md-1 col-sm-1">
            </div>
          </div>
            </fieldset>
          </form>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
        </div>
    </div>
                  <!-- /. row  -->
                </div>             <!-- /. PAGE INNER  -->
              </div>         <!-- /. PAGE WRAPPER  -->
            </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
