<?php
include 'connection.php';
$sql = "DELETE FROM questions WHERE id ='" . $_GET['id'] . "'";
$delete = mysqli_query($conn, $sql);
if ($delete==true) {
 
  header("Location:show_question.php");
} else {

  echo "Error deleting record: " . $conn->error;
}
?>