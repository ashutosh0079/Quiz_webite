<?php
include_once 'connection.php';
// // $id=$_POST['id'];
// //  echo $id;
// //  die();
// if(count($_POST)>0) {
//  mysqli_query($conn,"UPDATE questions set  language='" . $_POST['language'] . "',experience='" . $_POST['experience'] . "',examtype='" . $_POST['examtype'] . "', optiona='" . $_POST['optiona'] . "',optionb='" . $_POST['optionb'] . "',optionc='" . $_POST['optionc'] . "',optiond='" . $_POST['optiond'] . "',correctans='" . $_POST['correctans'] . "'WHERE id ='" . $_POST['id'] . "'");
// header("Location:show_question.php");
// }

if (isset($_POST['submit_btn'])) {

    $id = $_POST['id'];
    $language = $_POST['language'];
    $experience = $_POST['experience'];
    $question = $_POST['question'];
    $optiona = $_POST['optiona'];
    $optionb = $_POST['optionb'];
    $optionc = $_POST['optionc'];
    $optiond = $_POST['optiond'];
    $examtype = $_POST['examtype'];
    $correctans = $_POST['correctans'];
    mysqli_query($conn,"UPDATE questions SET language = '$language',experience = '$experience',examtype = '$examtype',question = '$question',optiona = '$optiona',optionb = '$optionb',optionc = '$optionc', optiond = '$optiond',correctans = '$correctans' WHERE id = $id");
}

header( 'Location: show_question.php' ) ;

?>