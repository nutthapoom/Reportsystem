<?php
session_start();
include_once('libs/connect.php');

  // variable
  $user = $_POST['username'];
  $pass = md5($_POST['password']);
  // $pass = $_POST['password'];
  if($user == ''){
    echo "Check Username";
  }elseif ($pass == '') {
    echo "Check Password";
  }else{
    $query = "SELECT * FROM tbl_member
              WHERE mem_user = '$user'
              AND mem_pass = '$pass'";
    $res = mysqli_query($connection,$query);
    $row = mysqli_fetch_array($res);
    if(!$row){
      echo "Username and Password Incorrect!";
      // header("location:login.php");
    }else{
        $_SESSION['mem_id'] = $row['mem_id'];
			  $_SESSION['mtype_id'] = $row['mtype_id'];
			  session_write_close();

			if($row['mtype_id'] == 1){
				header("location:admin_page.php");
			}elseif($row['mtype_id'] == 2){
				header("location:admin_page.php");
			}elseif($row['mtype_id'] == 3) {
			  header("location:member_data.php");
			}
	  }
  }
   mysqli_close($connection);
?>
