<?php
//error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="employee";
$a=mysqli_connect($server,$username,$password,$dbname);
if($a){
   // echo "connection ok";
}
else{
    echo "connection failed";
}
?>