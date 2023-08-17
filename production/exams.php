<?php

include('connection.php');

if (isset($_POST['submit_btn'])) {
   
    // $user      = $_POST['user'];
    $user_id      = $_POST['user'];
    $examtype  = $_POST['examtype'];
    $time      = $_POST['time'];
    $ques_no   = $_POST['ques_no'];
    $schedule  = $_POST['schedule'];


            // $verifyCode = false; 

            // do {
            //     $code = 88277;
            //     $sql = "SELECT examcode FROM  generated_exam WHERE examcode = '" . $code . "'"; ;
            //     $data = mysqli_query($conn, $sql);   
            //     if(!$sql)             {
            //         $verifyCode = true;
            //     }



            // } while ($verifyCode = true);


	        $let=5;
            $last =-1; $examcode = '';
			for ($i=0;$i<5;$i++)
			{
				do {
					$next_digit=mt_rand(0,9);
				}
				while ($next_digit == $last);
				$last=$next_digit;
				$examcode.=$next_digit;
			}
            $examcode = "EX-".$examcode; 

    
            $sql = "INSERT INTO generated_exam(examcode,examtype,time,ques_no,schedule,user_id) VALUES('$examcode','$examtype','$time','$ques_no','$schedule','$user_id')";
            $data = mysqli_query($conn, $sql);

            if ($data) {
              echo "New record created successfully";
              
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
            mysqli_close($conn);
?>
                <!-- <script>
                    swal({
                        title: "Successfully Registered!",
                        text: "New user registered",
                        icon: "success",
                        button: "Procced",
                    });
                </script>

        //     }
        //  else {
        //     echo "Please enter correct details!!";
        // }
      
// $conn->close();