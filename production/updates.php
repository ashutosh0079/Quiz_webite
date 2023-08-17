<?php
include_once 'connection.php';

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE adminuser set  role='" . $_POST['role'] . "',firstname='" . $_POST['firstname'] . "',gender='" . $_POST['gender'] . "', email='" . $_POST['email'] . "',phone='" . $_POST['phone'] . "',birthday='" . $_POST['birthday'] . "'WHERE id ='" . $_POST['id'] . "'");
header("Location:tables_dynamic.php");
}


?>