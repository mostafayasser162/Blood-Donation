<?php

include "../shared/connection.php";


if(isset($_POST['sumbit'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $select="SELECT * FROM `admin` WHERE admin_username='$username' AND admin_pass='$pass'";
    $run_select=mysqli_query($connect, $select);
    $row=mysqli_num_rows($run_select);
    $array=mysqli_fetch_assoc($run_select);
    
    if($row > 0){
        $_SESSION['admin']=$array['admin_id'];
    
      header("location:dashboard.php");
    }
    else{
        echo"Wrong data";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="adminlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="Admin">
    <form method="POST">
        <div class="container">
          <h1>Admin login</h1>
          <hr>
          <label for="Username"><b>Username</b></label>
          <input type="text" placeholder="Enter your Username" name="username" id="Name" required>
          <br>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter your Password" name="password" id="psw" required>
          <input type="checkbox" onclick="myFunction()"><b>Show Password</b>
          <br>
          <button type="submit" class="registerbtn" name="sumbit">Login</button>
       
        </hr>  
        </div>
    </form>
   </div>
    <script src="adminlogin.js"></script>
</body>
</html>

