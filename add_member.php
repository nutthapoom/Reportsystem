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
                     <h2>เพิ่มข้อมูลบุคลากร</h2>
                  </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <form class="form-horizontal" action="insert_member.php" method="post"  id="contact_form" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label">รหัสประจำตัวประชาชน : </label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
           <span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-credit-card"></i></span>
           <input name="citicen" placeholder="Citizen ID" class="form-control"  type="text">
        </div>
      </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">ชื่อ : </label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
      </div>
    </div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >นามสกุล : </label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">ตำแหน่ง : </label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
   <span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
<input name="position" placeholder="Position" class="form-control" type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">รหัสประจำตัว : </label></label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
   <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
<input name="position_code" placeholder="Position Code" class="form-control"  type="text">
</div>
</div>
</div>
<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">เบอร์โทร : </label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
   <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="mobile" placeholder="Mobile Number" class="form-control" type="text">
</div>
</div>
</div>
<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">ชื่อผู้ใช้งาน : </label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="user" placeholder="User Name" class="form-control" type="text">
</div>
</div>
</div>
<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">รหัสผ่าน : </label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
   <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input name="pass" placeholder="Password" class="form-control" type="password">
</div>
</div>
</div>
<!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label">ประเภทผู้ใช้งาน : </label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                <select name="mem_type" class="form-control selectpicker" >
                 <option value=" " > --- เลือกประเภทการเข้าใช้งาน --- </option>
                 <?php
                  $query  = "SELECT * FROM tbl_memtype WHERE mtype_id != 1";
                  $res    = mysqli_query($connection,$query);
                  while ($row = mysqli_fetch_assoc($res)) {
                    echo '<option value = "'.$row['mtype_id'].'">'.$row['mtype_name'].'</option>';
                  }
                 ?>
                </select>
          </div>
        </div>
    </div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button type="submit" class="btn btn-warning" >Submit <span class="glyphicon glyphicon-send"></span></button>
</div>
</div>

</fieldset>
</form>

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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
