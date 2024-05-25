<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <form action="#" method="post">
      <div class="form-group">
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <input type="submit" value="Login" name="submit" class="btn">
    </form>
  </div>
</body>
</html>
<?php
error_reporting(0);
include("connection.php");
if($_POST['submit']){
    $un=$_POST['username'];
    $pa=$_POST['password'];
    $query="select * from admin where username='$un' && password='$pa'";
    $data=mysqli_query($a,$query);
    $total=mysqli_num_rows($data);
     if($total==1){
        ?>
       <meta http-equiv="refresh" 
          content="0; url = http://localhost/crud/apage.php" />
       <?php
     }
     else{
       echo "<script> alert('username or password is wrong') </script>";
     }
}
?>
