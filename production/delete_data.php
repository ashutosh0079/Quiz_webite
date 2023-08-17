<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include 'connection.php';
$sql = "DELETE FROM adminuser WHERE id ='" . $_GET['id'] . "'";
$delete = mysqli_query($conn, $sql);
if ($delete==true) {
         
  echo "<script type='text/javascript'>
         
  swal({
    title: 'Are you sure?',
    text: 'Once deleted, you will not able to recover this entry!!',
    icon: 'warning',
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal('Account has been deleted!', {
        icon: 'success',
      });
      window.location.href='tables_dynamic.php'
      console.log('delted');
    } else {
      swal('Account is safe!');
      console.log('NOT delted');
    }
  });
})
}
 
  </script>";
  
} else {

  echo "Error deleting record: " . $conn->error;
}
?>