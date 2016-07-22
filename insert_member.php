<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>

  </body>
</html>
<?php
  include_once('libs/connect.php');

  $mem_citize_id = $_POST['citicen'];
  $mem_fname = 	$_POST['first_name'];
  $mem_lname = $_POST['last_name'];
  $mem_position = $_POST['position'];
  $mem_code = $_POST['position_code'];
  $mem_mobile = $_POST['mobile'];
  $mem_user = $_POST['user'];
  $mem_pass = md5($_POST['pass']);
  $mtype_id = $_POST['mem_type'];

  //Insert Data
  $strSQL = "INSERT INTO tbl_member";
  $strSQL .= "(mem_citize_id, mem_fname, mem_lname, mem_position, mem_code, mem_mobile, mem_user, mem_pass, mtype_id, LoginStatus, LastLogin)";
  $strSQL .= "VALUES ";
  $strSQL.= "('$mem_citize_id','$mem_fname','$mem_lname','$mem_position','$mem_code','$mem_mobile','$mem_user','$mem_pass','$mtype_id',0,'0000-00-00 00:00:00')";

  $objQuery = mysqli_query($connection,$strSQL);

  if($objQuery){
    echo "เพิ่มข้อมูลสำเร็จ";
  }else {
    echo "เกิดข้อผิดพลาด ". mysqli_error($connection);
  }
?>
