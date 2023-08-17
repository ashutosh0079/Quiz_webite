<?php
include("connection.php");
// $sql = "select * from questions where id='2'";
// $row = mysqli_query($conn,$sql);
// // $result=mysqli_fetch_array($row);
// $total  = mysqli_num_rows($row);
 
$sql = "SELECT * FROM questions where id= '2'";
$result = mysqli_query($conn,$sql);
$rows  = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Javascript Quiz</title>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>
<body>
<header class="header bg-primary">
<div class="left-title">JS Quiz</div>
<div class="right-title">Total Questions: <span id="tque"></span></div>
<div class="clearfix"></div>
</header>
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div id="result" class="quiz-body">
<form name="quizForm" onSubmit="">
<fieldset class="form-group" style="margin-top: 80px;">


<h4 style="font-size: 2rem; margin-left:274px"><span id="qid">1.</span><?php echo $rows['question'] ?></span></h4>
<div class="option-block-container"  id="question-options" style="margin-left:471px; margin-top:28px;">



</div> <!-- End of option block -->
</fieldset>
<button name="previous" id="previous" class="btn btn-success" style="margin-left: 471px;">Previous</button>
&nbsp;
<button name="next" id="next" class="btn btn-success">Next</button>
</form>
</div>
</div> <!-- End of col-sm-12 -->
</div> <!-- End of row -->
</div> <!-- ENd of container fluid -->
</div> <!-- End of content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="app.js"></script>
</body>
</html>