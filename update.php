<?php 
//error_reporting(0);
include("connection.php"); 
$q= $_GET['id'];
$s="select * from user where employee_id='$q'";
$da=mysqli_query($a,$s);
$ar=mysqli_fetch_assoc($da);
$sk=$ar['employee_skills'];
$sk1=explode(",",$sk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style2.css">
    <title>php curd operation</title>
</head>
<body>
    <div class="container">
      <form action="" method="POST">
      <div class="title"> update employee data</div>
     <div class="form">
        <div class="input_field">
          <label>Name</label>
        <input type="text" class="input" name="Fname" value="<?php echo $ar['employee_name']?>"> 
       </div>
        <div class="input_field">
          <label>Email</label>
          <input type="text" class="input" name="Email"  value="<?php echo $ar['employee_email']?>" >
        </div>
         <div class="input_field">
            <label>Phone</label>
            <input type="text" class="input" name="Phone"  value="<?php echo $ar['employee_phone']?>">
          </div>
         <div class="input_field">
              <label>Department</label>
               <select class="selectbox" name="Depart">
                 <option value="not selected">select</option>
                 <option value="HR"  
                 <?php 
                 if($ar['employee_department']=='HR')
                 {
                  echo "selected";    
                 }
                 ?>>Hr</option>
                 <option value="PHP developer"
                   <?php 
                 if($ar['employee_department']=='PHP developer')
                 {
                  echo "selected";    
                 }
                 ?>>PHP developer</option>
                 <option value="Support staff"
                 <?php 
                 if($ar['employee_department']=='support staff')
                 {
                  echo "selected";    
                 }
                 ?>>support staff</option>
                 <option value="Tester"
                 <?php 
                 if($ar['employee_department']=='Tester')
                 {
                  echo "selected";    
                 }
                 ?>>Tester</option>
               </select>
          </div>
          <div class="c">
            <label class="ch">Skills</label>
          <input type="checkbox" name="skill[]" value="php"
          <?php
          if(in_array('php',$sk1)){
            echo "checked";
          }
          ?>>
          <label class="cm">php</label>
          <input type="checkbox" name="skill[]" value="javascript"
          <?php
          if(in_array('javascript',$sk1)){
            echo "checked";
          }
          ?>>
          <label class="cm">java script</label>
          <input type="checkbox" name="skill[]" value="reactjs"
          <?php
          if(in_array('reactjs',$sk1)){
            echo "checked";
          }
          ?>>
          <label class="cm">react js</label>
          <input type="checkbox" name="skill[]" value="html"
          <?php
          if(in_array('html',$sk1)){
            echo "checked";
          }
          ?>>
          <label class="cm">html</label>
          <input type="checkbox" name="skill[]" value="css"
          <?php
          if(in_array('css',$sk1)){
            echo "checked";
          }
          ?>>
          <label class="cm">css</label>
          </div></br>
           <div class="input_field terms">
               <label class="check">
                  <input type="checkbox" required>
                </label>
               <p>agree to term and condition</p>
            </div>
          <div class="input_field">
             <input type="submit" value="Update" class="btn" name="register">
           </div>
</div>
</form>
</div>
</body>
</html>
<?php
error_reporting(0);
  if($_POST["register"]){
       $name=$_POST['Fname'];
       $email=$_POST['Email'];
       $phone=$_POST['Phone'];
       $dep=$_POST['Depart'];
       $sl=$_POST['skill'];
       $sl1=implode(",",$sl);
       $s="update user set employee_name='$name',employee_email='$email',employee_phone='$phone',
       employee_department='$dep',employee_skills='$sl1' where employee_id='$q'" ;
       $data=mysqli_query($a,$s);
      if($data){
        echo  "<script> alert('data updated')</script>";
        ?>
        <meta http-equiv="refresh" 
        content="0; url = http://localhost/crud/display.php" />
        <?php
      }
      else{
        echo "failed to update";
      }
  }
  ?>