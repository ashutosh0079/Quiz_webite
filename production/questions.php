<?php
include('connection.php');

if(isset($_POST['submit_btn']))
{
    $language= $_POST['language'];
    $experience = $_POST['experience'];
    $examtype = $_POST['examtype'];
    $question = $_POST['question'];
    $optiona = $_POST['optiona'];
    $optionb = $_POST['optionb'];
    $optionc = $_POST['optionc'];
    $optiond = $_POST['optiond'];
    $correctans = $_POST['correctans'];

    $sql = "INSERT INTO questions(language,experience,examtype,question,optiona,optionb,optionc,optiond,correctans) VALUES('$language','$experience','$examtype','$question','$optiona','$optionb','$optionc','$optiond','$correctans')";
   
        
    if($conn->query($sql) === TRUE)
  {
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Successfully Registered!",
            text: "New user registered",
            icon: "success",
            button: "Procced",
        });
        window.location.href ='form.php';
    </script>
<?php
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>