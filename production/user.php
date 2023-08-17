<?php
session_start();
include("connection.php");
$sql = "SELECT * FROM adminuser";
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="C0I9NSp7N5O3ThLv6NRCISSvZYeXZNdaGfV6YKYY" />
<head>
<title>Start Test</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    
<style>
    button{
        color:white;
        font-weight:bold;
        font-size:21px;
        padding:3px 30px;
        margin-left:90px;
        background-color:darkcyan;
    }
    .box{
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 10%), 0 3px 5px 0 rgb(0 0 0);
        height:auto;
        width:auto;
        margin-top:55px;
    }
    .head{
        text-align:center;
        background-color: darkcyan;
        color:white;
        padding:2px;
    }
    .logo{
        position:fixed;
        top:0;
        right:50px;
    }
    a{
        position:fixed;
        top:0px;
        right:30px;
    }
</style>
</head>
<body>
    
    <div class="container box" style="border:1px solid darkcyan;">    
        <div class="col-md-12 mt-3 ">
            <h3 class="head">Start Online Test</h3>
        </div>
        <form action="debug.php"method="post">
            <div class="row" >
                <div class="col-md-10 pt-3 pl-5">
                    <label for="examcode" class="form-control-lg">Exam Code : </label>
                    <input type="text" name="examcd" id="examcode" class="form-control-md" autocomplete="off"/>
                    <input type="hidden" name="user_id" class="user_id"  value="1" />
                </div>
                <div class="col-md-12 pl-5">
                    <p>Dear <b><?php echo $_SESSION ['firstname'];?>,</b></p>
                </div>
                <div class="col-md-12"style="padding-left:75px;">
                    <p>Please go through the online test instruction before you commence the test.</p>
                </div>
                <div class="col-md-12  pl-5">
                    <h4 style="color:darkcyan;">Online Test Instructions:</h4>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-12 pl-5">
                    <p>1. On commencing the online test,the clock displays the remmaining duration of the test</p>
                </div>
                <div class="col-md-12 pl-5">
                    <p>2. Click Next for <b>Next Questions</b>,and you can't process next question before answering current question.</p>
                </div>
                <div class="col-md-12 pl-5">
                    <p>3. Only one option is correct here </b></p>
                </div>
                <div class="col-md-12 pl-5">
                    <p>4. Once you have completed the Online test you can see the <b>Result</b></p>
                </div>
                <div class="col-md-12 pl-5">
                    <p>5. <b>Best of Luck, <?php echo $_SESSION ['firstname'];?> </b></p>
                </div>
                <div class="col-md-12 pb-2 text-center">
                    <button type="submit" name="submit" class="rounded-pill">Start Test</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
