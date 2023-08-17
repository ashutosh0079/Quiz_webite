<?php

include('connection.php');

if(isset($_POST['submit_btn']))
{
    $name      = $_POST['`name`'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existsql = "SELECT * FROM adminuser WHERE email ='$email'";
    $result = mysqli_query($conn,$existsql);
    $numrows = mysqli_num_rows($result);
    if($numrows>0){
      echo"Email arleady exist!!";
    }
    else{
      if($password==$cpassword){
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO adminuser(name,email,password) VALUES('$name','$email','$hash')";
        $data = mysqli_query($conn,$sql);
        if($data){
           $showalert = true;
          header("location:login.php");
        }
      }
      else{
        echo"Please enter correct Password!!";
      }
    }
} 
$conn->close();

// $sql= "INSERT INTO adminuser(name,email,password) values('$name','$email',$password)";
// $data= mysqli_query($con ,$sql);
// }else{
//     echo "error";
// }

?>