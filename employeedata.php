<?php include("connection.php"); ?>
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
      <div class="title"> Give Employ Data</div>
     <div class="form">
        <div class="input_field">
          <label>Name</label>
        <input type="text" class="input" name="Fname" required > 
       </div>
        <div class="input_field">
          <label>Email</label>
          <input type="text" class="input" name="Email" required >
        </div>
         <div class="input_field">
            <label>Phone</label>
            <input type="text" class="input" name="Phone" required>
          </div>
         <div class="input_field">
              <label>Department</label>
               <select class="selectbox" name="Depart">
                 <option value="not selected">select</option>
                 <option value="HR">Hr</option>
                 <option value="PHP developer">PHP developer</option>
                 <option value="Support staff">support staff</option>
                 <option value="Tester">Tester</option>
               </select>
          </div>
          <div class="c">
            <label class="ch">Skills</label>
          <input type="checkbox" name="skill[]" value="php"><label class="cm">php</label>
          <input type="checkbox" name="skill[]" value="javascript"><label class="cm">java script</label>
          <input type="checkbox" name="skill[]" value="reactjs"><label class="cm">react js</label>
          <input type="checkbox" name="skill[]" value="html"><label class="cm">html</label>
          <input type="checkbox" name="skill[]" value="css"><label class="cm">css</label>
          </div></br>
           <div class="input_field terms">
               <label class="check">
                  <input type="checkbox" required>
                </label>
               <p>agree to term and condition</p>
            </div>
          <div class="input_field">
             <input type="submit" value="register" class="btn" name="register">
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
       $depart=$_POST['Depart'];
       $skills=$_POST['skill'];
       $skil=implode(",",$skills);
       $s="INSERT INTO user(employee_name,employee_email,employee_phone,employee_department,employee_skills) VALUES('$name','$email','$phone','$depart','$skil')";
       $data=mysqli_query($a,$s);
      if($data){
        echo  "<script> alert('data inserted')</script>";
        ?>
         <meta http-equiv="refresh" 
        content="0; url = http://localhost/crud/apage.php" />
        <?php
      }
      else{
        echo "failed to insert";
      }
  }
  ?>