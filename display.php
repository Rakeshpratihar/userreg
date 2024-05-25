<html>
<head>
    <title>DISPLAY</title>
    <style>
        body{
            background:#D071f9;
        }
        table{
            background-color:white;
        }
        .update{
            background-color:green;
            color:white;
            cursor:pointer;
        }
        .delete{
            background-color:red;
            color:white;
            cursor:pointer;
        }
   </style>
</head>
</html>
<?php
include("connection.php");
//error_reporting(0);
$query="select * from user";
$data=mysqli_query($a,$query);
$total=mysqli_num_rows($data);
//echo $total;  //op=no of rows
if($total!=0){
     //echo "table has record"; 
    ?>
      <h1 align="center">Display All Record</h1>
    <table border="3" width="90%" align="center">
        <tr>
        <th width="5%">Id</th>
        <th width="10%"> Name</th>
        <th width="10%">Email</th>
        <th width="10%">Phone</th>
        <th width="20%">Department</th>
        <th width="10%">Skills</th>
        <th width="10%">Operatons</th>
        </tr>
   
    <?php
    while($result=mysqli_fetch_assoc($data)){
       echo  "<tr>
                 <td>".$result['employee_id']."</td>
                 <td>".$result['employee_name']."</td>
                 <td>".$result['employee_email']."</td>
                 <td>".$result['employee_phone']."</td>
                 <td>".$result['employee_department']."</td>
                 <td>".$result['employee_skills']."</td>
                 <td><a href='update.php?id=$result[employee_id]'><input type='submit' value='Update' class='update'></a>
                 <a href='delete.php?id=$result[employee_id]'><input type='submit' value='Delete' class='delete'
                  onclick='return chekdelete()'></a></td>
                 </tr>
            ";
    }
}
else{
    echo "no record found";
}
?>
</table>
<script>
    function chekdelete(){
        return confirm('are you sure you want to delete this record?');
    }
</script>