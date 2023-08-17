<?php
session_start();
include("connection.php");
if(isset($_POST["submit"])){
    $examcd = $_POST["examcd"];
    $sql = "select language,examcode from generated_exam where examcode='$examcd'";
    $result = mysqli_query($conn,$sql);
    $row =  mysqli_fetch_assoc($result);
        
     $check=$_SESSION['examcode']=$row['examcode'];
            
    if($examcd==$check){
        $data = $_SESSION['language'] = $row['language'];
        if($examcd==$row['examcode'])
        // header("location:quiz1.php");
            
        $sql = "select * from questions where language= '$data'";
        $result = mysqli_query($conn,$sql); 
        $row =  mysqli_fetch_assoc($result);
           if($result){
            header("location:quiz1.php");
            
           }
    
  
    }
    else{
        echo"exam code didn't match!!";
}  

}