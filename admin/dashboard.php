<?php

include "../shared/connection.php";

if(isset($_POST['logout'])){
  session_unset();
  session_destroy();
  header("location:adminlogin.php");
}



$select1="SELECT * FROM `user`";
$run_select1=mysqli_query($connect,$select1);
$row1=mysqli_num_rows($run_select1);

$select2="SELECT * FROM `doner`";
$run_select2=mysqli_query($connect,$select2);
$row2=mysqli_num_rows($run_select2);

$select3="SELECT * FROM `request`";
$run_select3=mysqli_query($connect,$select3);
$row3=mysqli_num_rows($run_select3);

$select4="SELECT * FROM `contactus`";
$run_select4=mysqli_query($connect,$select4);
$row4=mysqli_num_rows($run_select4);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank</title>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./Assets/lala.css">
  <link rel="stylesheet" href="./Assets/Add-Admin.css">
</head>

<body>
  <!-- Start Navbar -->
  <div class="Header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./Assets/Images/photo1661089274 (1).jpeg" alt="" class="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php" style="color: #c6414c;">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addadmin.php">Add Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addcondition.php">Add Medical Condition</a>
            </li>
          </ul>
          <form method="POST">
                <button class="btn btn-lg login-link" type="submit" name="logout">Logout</button>
          </form>
 
        </div>
      </div>
    </nav>
  </div>
  <!-- End Navbar -->
  <!-- Start Buttons About Admin Page -->
  <div class="container d-flex">
    <div class="row w-100 gx-0 flex-column">
      <div class="col-lg-12 d-flex justify-content-between">
        <img src="./Assets/Images/Blood donation-pana.png" alt="" class="Blood-donation w-100">
      </div>
    </div>
  </div>
  <div class="container"style="padding-bottom:3rem;">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center flex-row">
        <div class="car9d mytata" style="width: 20rem;">
          <div class="icon"><i class="fa-solid fa-users"></i> </div>
          <div class="card-body">
          <h4 class="card-title text-center"><?php echo $row1?><sup class="lop">+</sup></h5>
          </div>
          
          <a href="./Users.php" class="btn btn-lg link" tabindex="-1" role="button" aria-disabled="true" id="Users">Users</a>
        
        </div>
        <div class="car9d mytata" style="width: 20rem;">
          <div class="icon"><i class="fa-solid fa-hand-holding-medical"></i></div>
          <div class="card-body">
            <h4 class="card-title text-center"><?php echo $row2?><sup class="lop">+</sup></h5>
          </div>
          
          <a href="./Donations.php" class="btn btn-lg link" tabindex="-1" role="button" aria-disabled="true" id="Donations">Donations</a>        
        
        </div>
        <div class="car9d mytata" style="width: 20rem;">
          <div class="icon"><i class="fa-solid fa-code-pull-request"></i></i></div>
          <div class="card-body">
            <h4 class="card-title text-center"><?php echo $row3?><sup class="lop">+</sup></h5>
          </div>
         
          <a href="./Requests.php" class="btn btn-lg link" tabindex="-1" role="button" aria-disabled="true" id="Requests">Requests</a>
         
        </div>
        <div class="car9d mytata" style="width: 20rem;">
          <div class="icon"><i class="fa-solid fa-message"></i></i></div>
          <div class="card-body">
            <h4 class="card-title text-center"><?php echo $row4?><sup class="lop">+</sup></h5>
          </div>
         
          <a href="./Feedback.php" class="btn btn-lg link" tabindex="-1" role="button" aria-disabled="true" id="Feedback">Feedback</a>
          
        </div>
      </div>
    </div>
  <!-- End Buttons About Admin Page -->
</body>
</html>