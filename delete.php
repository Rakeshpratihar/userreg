<?php 
include("connection.php");
$p=$_GET['id'];
  $q="delete from user where employee_id='$p'";
  $data=mysqli_query($a,$q);
  if($data){
    echo "<script>alert('record deleted')</script>";
    ?>
     <meta http-equiv="refresh" 
        content="0; url = http://localhost/crud/display.php" />
    <?php
  }
  else{
    echo "<script>alert('failed to delete')</script>" ;
  }
?>