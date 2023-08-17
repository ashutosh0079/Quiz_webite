<?php
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "admin";
 $conn = new mysqli($hostName,$userName,$password,$dbName);
 if($conn){
   //  echo "connected successfully";
 }else{
    echo "error in connection".mysqli_connect_error();
 }

  ?>
