<?php
  include_once('libs/connect.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Activity : Volunteer</title>
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
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> ข้อมูลการเข้าใช้งาน</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> สร้างตารางกิจกรรม</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>
					<li  >
                        <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                    </li>
                     <li  >
                        <a   href="add_member.php"><i class="fa fa-laptop fa-3x"></i>เพิ่มข้อมูลบุคลากร</a>
                    </li>

                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-sitemap fa-3x"></i> สร้างแบบสำรวจ<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">แบบสรุปรายงาน</a>
                            </li>
                            <li>
                                <a href="#">ด้านกิจกรรม</a>
                            </li>
                            <li>
                                <a href="#">กิจกรรม<span class="fa arrow"></span></a>
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
                  <h2>เพิ่มข้อมูลกิจกรรม</h2>
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
                    บันทึก แก้ไข ข้อมูลกิจกรรม
                </div>
                <div class="panel-body">
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label">ชื่อกิจกรรม :</label>
                    <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input name="side" placeholder="ข้อมูลด้านกิจกรรม" class="form-control" type="password">
                      </div>
                    </div>
                  </div>
                  <!-- Select Basic -->
                  <div class="form-group">
                    <label class="col-md-4 control-label">ด้านกิจกรรม : </label>
                      <div class="col-md-4 selectContainer">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="mem_type" class="form-control selectpicker" >
                              <option value=" " > --- เลือกด้านกิจกรรม --- </option>
                                <?php
                                  $query  = "SELECT * FROM tbl_side";
                                  $res    = mysqli_query($connection,$query);
                                  while ($row = mysqli_fetch_assoc($res)) {
                                    echo '<option value = "'.$row['side_id'].'">'.$row['side_name'].'</option>';
                                  }
                                ?>
                            </select>
                        </div>
                      </div>
                  </div>
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
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                  <?php
                    $query2  = "SELECT tbl_actv.actv_id AS actv_id, tbl_actv.actv_name AS actv_name, tbl_actv.actv_unit AS actv_unit, tbl_side.side_name AS side_name FROM tbl_actv LEFT JOIN tbl_side ON tbl_actv.side_id = tbl_side.side_id";
                    $res2    = mysqli_query($connection,$query2); ?>
                    <div class="table-responsive">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                      <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                            <thead>
                                <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="หมวดหมู่ร้านซ่อม: activate to sort column ascending" style="width: 25px;">ลำดับ</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="ชื่อร้านซ่อม: activate to sort column ascending">ชื่อกิจกรรม</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="ชื่อร้านซ่อม: activate to sort column ascending">หน่วย</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="ชื่อร้านซ่อม: activate to sort column ascending">ชื่อด้านกิจกรรม</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="รายละเอียดร้านซ่อม: activate to sort column ascending" style="width: 200px;">จัดการข้อมูล</th>

                                </tr>
                            </thead>
                            <tbody>
                              <?php while($row2=mysqli_fetch_array($res2))
                              {
                              ?>
                              <tr>
                                <td class="text-right"><?php echo $row2["actv_id"]; ?></td>
                                <td class="text-left"><?php echo $row2["actv_name"]; ?></td>
                                <td class="text-right"><?php echo $row2["actv_unit"]; ?></td>
                                <td class="text-left"><?php echo $row2["side_name"]; ?></td>
                                <td class="text-center"><button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button></td>
                              </tr>
                                    <?php
                                  }
                              ?>
                            </tbody>
                        </table>
                        <div class="form-group">
                          <label class="col-md-4 control-label"></label>
                          <div class="col-md-4">
                            <button type="submit" class="btn btn-primary" >เพิ่ม <span class="glyphicon glyphicon-send"></span></button>
                          </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
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
