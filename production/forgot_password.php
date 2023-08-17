<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <title>Quizzly! | </title>
  <style>

  </style>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="" method="post">
            <h1>Password Recovery</h1>
            <div class="col-md-12">
              <input type="email" class="form-control" placeholder="Recovery Email" name="email" required="" />
            </div>
            <div>

              <button class="btn btn-outline-success" type="submit" name="submit" style="margin-right: 209px;">Submit</button>
            </div>
            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
      </div>
    </div>
    </form>
    </section>
  </div>
</body>
</html>
<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
  
  $email = $_POST['email'];
  $emailquery = "select * from adminuser where email='$email' ";
  $sql = mysqli_query($conn,$emailquery);
  $count = mysqli_num_rows($sql);
  if($count>0){
    $userdata = mysqli_fetch_array($sql);
    $firstname = $userdata['firstname'];

    $subject= "Password Recovery";
    $body = "Hi, $firstname. Click here to recover your Password
    http://localhost/gentelella-master/production/reset_password.php";
    $sender_email = "From: ashu07988@gmail.com";
    if(mail($email,$subject,$body,$sender_email)){
      $_SESSION['msg'] = "Check your email to reset your Password $email";
      header("location:login.php");
    }
    else{
      echo"Email sending failed!!";
    }
  }
}
?>