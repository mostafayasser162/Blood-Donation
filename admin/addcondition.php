<?php

include "../shared/connection.php";

if(isset($_POST['add'])){

   $name=$_POST['condition'];

   $insert="INSERT INTO `addcondition` VALUES (NULL,'$name')";
   $run_insert=mysqli_query($connect,$insert);


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Condition</title>
    <link rel="stylesheet" href="userlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 <div class="user">
    <form  method="POST">
        <div class="container">
          <h1>Add Condition</h1>
          <hr>
          <label for="Email"><b>Add Medical Condition</b></label>
          <input type="text" placeholder="Add Medical Condition" name="condition" id="email" required>
          <br>
         
          <button type="submit" name="add" class="registerbtn">Done</button>

       
        </hr>  
        </div>
    </form>
 </div>
    <script src="userlogin.js"></script>
</body>
</html>