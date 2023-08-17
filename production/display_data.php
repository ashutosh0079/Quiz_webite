<?php

  include 'connection.php';
  $sql = "SELECT * FROM adminuser";
  $result = mysqli_query($conn,$sql);
  $row  = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying records</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    left: 10px;
     width:70%; 
    margin-left:15%; 
    margin-right:15%;
}
        .styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
        .styled-table th,
        .styled-table td {
    padding: 12px 15px;
}
        .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

        .styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

        .styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.eight h1 {
  text-align:center;
 
  text-transform:uppercase;
  font-size:26px; letter-spacing:1px;
  
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  grid-template-rows: 16px 0;
  grid-gap: 22px;
}
.eight h1:after,.eight h1:before {
  content: " ";
  display: block;
  border-bottom: 2px solid #ccc;
  background-color:#f8f8f8;
}

    </style>
</head>

<body>
<div class="eight">
  <h1>User records</h1>
</div>
</body>

<?php

include("connection.php");

$query  = "SELECT * FROM  adminuser";
$data   = mysqli_query($conn,$query);
$total  = mysqli_num_rows($data);
  

if($total !=0){
?>

<table border="1" cellspacing="7" class="styled-table"  >
        <tr>
        <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Passsword</th>
            <th>Operations</th>
        </tr>
        
    
    <?php
      $i=1;
    while($result = mysqli_fetch_assoc($data)){
        echo "
        <tr>
            <td>". "$i"."</td>
            <td>".$result['name']."</td>
            <td>".$result['email']."</td>
            <td>".$result['password']."</td>
            
            <td><a href='update_data.php?id=$result[id]'><i class='fa-solid fa-pen-to-square'></i></a>
            <a href='delete_data.php?id=$result[id]' onclick = 'return checkdelete()'><i class='fa fa-trash' aria-hidden='true'></i></a></td>


        </tr>
      ";     
          $i++;
    }
    
}
?>
  
</table>
<script>
    function checkdelete(){
        return confirm('Are you sure you want to delete this record ?');
    }
</script>
</html>