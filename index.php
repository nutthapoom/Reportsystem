<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN | VOLUNTEER</title>
    <!-- BOOTSTRAP STYLES-->
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!-- FONTAWESOME STYLES-->
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
          <!-- CUSTOM STYLES-->
      <link href="assets/css/style.css" rel="stylesheet" />
       <!-- GOOGLE FONTS-->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ระบบรายงานผลการดำเนินงาน</a>
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a>
                    </li>
                    <li><a href="#">Link</a>
                    </li>
                    <li><a href="#">Link</a>
                    </li>
                    <li><a href="#">Link</a>
                    </li>
                    <li><a href="#">Link</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-right">
                  <a href="login.php" class="btn btn-danger" role="button">Log In</a>
                </div>
            </div>
        </center>
      </div>
    </div>

    <!-- CONTENT-->
    <div class="wrappage">
      <div class="container">

        <div class="text-center">
          <h4><a href="#"><i class="icon-home"></i></a>&nbsp;ยินดีต้อนรับคุณ...&nbsp;<span class="red">devill</span>&nbsp;...เข้าสู่ระบบรายงานผลการดำเนินงาน        ของอาสาสมัครสาธารณสุขประจำหมู่บ้าน</h4>
          <hr>
        </div>

        <div class="row marbot">
          <div class="col-xs-6 col-sm-3" style="">
            <a href="#">
            <div align="middle" class="img-rounded">
            <img class="img_border img-responsive" src="img_main/news.png">
              <div id="" class="text-center">
                <h4>ข้อมูลข่าวสาร</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <a href="#">
            <div align="middle" class="img-rounded">
            <img class="img_border img-responsive" src="img_main/gallery.png">
              <div id="" class="text-center">
                <h4>ภาพกิจกรรม</h4>
              </div>
            </div>
          </div>
          <!-- Optional: clear the XS cols if their content doesn't match in height -->
          <div class="clearfix visible-xs-block"></div>
          <div class="col-xs-6 col-sm-3">
            <a href="#">
            <div align="middle" class="img-rounded">
              <img class="img_border img-responsive" src="img_main/calendar.png">
              <div id="" class="text-center">
                  <h4>ปฏิทินกิจกรรม</h4>
             </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <a href="#">
            <div align="middle" class="img-rounded">
	            <img class="img_border img-responsive" src="img_main/details.png">
              <div id="" class="text-center">
		              <h4>คำอธิบายการทำรายงาน</h4>
	           </div>
	          </div>
          </div>
        </div>
        <div class="row marbot">
          <div class="col-xs-6 col-sm-3">
            <a href="#">
            <div align="middle" class="img-rounded">
            <img class="img_border img-responsive" src="img_main/document.png">
              <div id="" class="text-center">
                <h4>ทำรายงาน</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <a href="#">
            <div align="middle" class="img-rounded">
            <img class="img_border img-responsive" src="img_main/chart.png">
              <div id="" class="text-center">
                <h4>สถิติ</h4>
              </div>
            </div>
          </div>
          <!-- Optional: clear the XS cols if their content doesn't match in height -->
          <div class="clearfix visible-xs-block"></div>
          <div class="col-xs-6 col-sm-3">
            <a href="#">
            <div align="middle" class="img-rounded">
              <img class="img_border img-responsive" src="img_main/download.png">
              <div id="" class="text-center">
                  <h4>ดาวน์โหลดเอกสาร</h4>
             </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">
            <a href="member_data.php">
            <div align="middle" class="img-rounded">
              <img class="img_border img-responsive" src="img_main/volunteer.png">
              <div id="" class="text-center">
                  <h4>ข้อมูล อสม.</h4>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /CONTENT -->



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
