<?php
session_start();
include 'connection.php';
// variable store in session.
// check login if that session variable is true redirect to index.php/home page for logged user.

if(isset($_POST['submit'])){
$email = $_POST['email'];
$password=$_POST['password'];
$sql= "select * from adminuser where email='$email'";

$result  = mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);
if($count>0){
    $row = mysqli_fetch_assoc($result);
        $verify=password_verify($password,$row['password']);
        if ($verify==1){
            $_SESSION ['firstname'] = $row['firstname'];
            $_SESSION ['check_Logged_Status'] = true;
            header("location:index.php");
        }else{
            $_SESSION['login_error'] = "Incorrect username or password";
            header("location:login.php");
        }
    }
}

    ?>