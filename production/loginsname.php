<?php

  include 'connection.php';
  $result = mysqli_query($conn,"SELECT * FROM adminuser WHERE email='" . $_GET['userid'] . "'");
  $row  = mysqli_fetch_array($result);
  header("location:index.php",'user','$row',);

?>