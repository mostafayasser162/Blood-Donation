<?php
include "../shared/connection.php";

        if(isset($_POST ['send'])){
            $name = $_POST['aname'];
            $username = $_POST['uadmine'];
            $email = $_POST['aemail'];
            $password = $_POST['apassword'];
            $repassword = $_POST['apassword2'];
            $address = $_POST['aaddress'];
            $number = $_POST['aphone'];
            $gender = $_POST['agender'];
           $date = $_POST['adate'];
            $error=array();
            header("location:adminlogin.php");

            $select="SELECT * FROM `admin` WHERE  `admin_username` = '$username'";
            $run_select = mysqli_query($connect , $select);
            $row = mysqli_num_rows($run_select); 
            if($row > 0){
                echo "User Name Is Already Taken";

            }    

            if($password != $repassword){
                echo"Not The Same Password";
            }

            if(strlen((string)$number) != 11){
                echo" phone number Must Be 11 Number";
            }

            if(strlen((string)$password) <8){
                array_push($error, '<div class="alert alert-secondary" role="alert">
                password must be more then 8 char
              </div>');
            }
           

            if(empty($error)){
             $insert= "INSERT INTO `admin` VALUES(NULL , '$name' , '$username' , '$email' , '$password' , '$address' , '$number' , '$gender' ,'$date')";
            $run_insert=mysqli_query($connect , $insert);
            }
            else{
                foreach($error as $data){
                    echo "<h6>$data</h2>";
                }
            }
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin registration</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="regi">
    <form method="POST">
        <div class="container">
          <h1>Admin Register</h1>
          <p>Please fill in this form to create an account</p>
          <hr>
          <label for="Name"><b>Admin Name</b></label>
          <input type="text" placeholder="Enter your Name" name="aname" id="Name" required>
          <br>
          <label for="Name"><b>Admin Username</b></label>
          <input type="text" placeholder="Enter your Username" name="uadmine" id="Name" required>
          <label for="email"><b>Admin Email</b></label>
          <input type="text" placeholder="Enter Email" name="aemail" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter your Password" name="apassword" id="psw" required>
          <input type="checkbox" onclick="myFunction()"><b>Show Password</b>
          <br>
          <br>
          <label for="psw2"><b>Re-entre Password</b></label>
          <input type="password" placeholder="Re-enter Password" name="apassword2" id="psw" required>
          <input type="checkbox" onclick="myFunction2()"><b>Show Password</b>
          <br>
          <br>
          <label for="date"><b>Admin Birthdate</b></label>
          <input type="date" placeholder="Date" name="adate" id="Date" required>
<br>
          <label for="address"><b>Admin Address</b></label>
          <input type="text" placeholder="Address: building no. ,street no. ,city, governorate,country." name="aaddress" id="address" required>
<br>
<div class="gender-details">
  <input type="radio" name="agender" id="dot-1" value="male">
  <input type="radio" name="agender" id="dot-2" value="female">
  
  <label for="gender-title"><b>Gender</b></label>
  <div class="category">
      <label for="dot-1">
          <span class="dot one"></span>
          <span class="gender">Male</span>
      </label>
      <label for="dot-2">
          <span class="dot two"></span>
          <span class="gender">Female</span>
      </label>
      
      
  </div>
              <br>
              <label for="Phone number"><b>Admin Phone number</b></label>
              <input type="Phonenumber" placeholder=" Enter your Phone number" name="aphone" id="ph.no" required>
          <hr>
      
          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          <button type="submit" class="registerbtn" name="send">Register</button>
        </div>
      
    
         
         
    
      </form>
</div>
    <script src="admin.js"></script>
    </body>
</html>