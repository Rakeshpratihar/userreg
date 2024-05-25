<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST">
    <h3 >Click on the insert button to insert value in the database</h3>
    <input type="submit" value="INSERT" name="insert">
    <h3 >Click on the display button to see the value from the database</h3>
    <input type="submit" value="DISPLAY" name="display">
    </form>
  </div>
</body>
</html>
<?php
error_reporting(0);
if($_POST["insert"]){
    ?>
    <meta http-equiv="refresh" 
          content="0; url = http://localhost/crud/employeedata.php" />
          <?php
}
else if($_POST["display"]){
    ?>
    <meta http-equiv="refresh" 
          content="0; url = http://localhost/crud/display.php" />
          <?php
}
?>