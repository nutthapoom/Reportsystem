<?php
  ini_set("date.timezone","Asia/Bangkok");
  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $dbname = "vltdb";
  $connection = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error($connection));
  mysqli_query($connection,"SET character_set_results=utf8");
  mysqli_query($connection,"SET character_set_client=utf8");
  mysqli_query($connection,"SET character_set_connection=utf8");
 ?>
