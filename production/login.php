<!DOCTYPE html>
<html lang="en">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Gentelella Alela! | </title>
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
            <h1>Login Form</h1>
            <div class="col-md-12">
              <label><i class="fa-solid fa-user-tie"></i></label>
            <input type="email" class="form-control " placeholder="Email" name="email" required="" />
            </div>
            <div class="col-md-12">
              <input type="password" class="form-control" id="password1" placeholder="Password" name="password" required="" />
              <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                <i id="slash" class="fa fa-eye-slash"></i>
                <i id="eye" class="fa fa-eye" ></i>
              </span>
            </div>
            <div>

              <button class="btn btn-outline-primary" type="submit" name="submit">Login</button>
              <a class="btn btn-light" href="forgot_password.php">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <!-- <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div> -->
            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
      </div>
    </div>
    </form>
    </section>
  </div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
        function hideshow() {
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if (password.type === 'password') {
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            } else {
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>
</html>
<?php
include 'connection.php';
session_start();
// variable store in session.
// check login if that session variable is true redirect to index.php/home page for logged user.

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "select * from adminuser where email='$email'";

  $result  = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
       $_SESSION['id'] = $row['id'];
  if ($count > 0) {
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($password, $row['password']);
    if ($verify == 1) {
      $_SESSION['firstname'] = $row['firstname'];
       if($row['role'] == 'User'){
            // $_SESSION['user']=$row['username'];
                header("location: user.php");
        }
        else if($row['role'] == 'Admin'){
            // $_SESSION['user']=$row['username'];
                header("location: index.php");
        }
      
      
    } else {
?>
      <script>
        swal("Login Failed!", "Enter valid Email and Password!", "warning");
      </script>
<?php
    }
  }
}

?>