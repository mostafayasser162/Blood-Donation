<?php

include './shared/connection.php';

if(isset($_POST['logout'])){
  session_unset();
  session_destroy();
}

if(isset($_POST['login'])){
  header("location:/bloodproject(v2.0)/users/userlogin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/index.css">
   

</head>

<body>
    <!--Start Navbar -->
 <div class="Header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.jpeg" alt="" class="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/bloodproject(v2.0)/" style="color: #c6414c;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bloodproject(v2.0)/users/why.php" >Why to Donate</a>
                    </li>
                    <?php if(isset($_SESSION['user'])){?>
              <li class="nav-item"> 
              <a class="nav-link" href="/bloodproject(v2.0)/users/userprofile.php">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bloodproject(v2.0)/users/request.php">Need Blood</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="/bloodproject(v2.0)/users/donationform.php">Donate</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/bloodproject(v2.0)/users/contactus.php" >Contact Us</a>
          </li>
                   <?php }?>
      
                    <li class="nav-item">
                      <a class="nav-link" href="/bloodproject(v2.0)/users/about.php" >About Us</a>
                    </li>
                 
                </ul>
                <?php
                    if(isset($_POST['logout'])){
                      session_unset();
                      session_destroy();
                      header("location:/bloodproject(v2.0)/");
                      
                    }
                    if(isset($_POST['login'])){
                      header("location:./users/userlogin.php");
                    }
                    ?>
                    <?php if(isset($_SESSION['user'])){ ?>
                <form class="link-lg login-link"method="POST"><button name="logout">Logout</button></form>
                    <?php } else {?>
                <form class="link-lg login-link"method="POST"><button name="login">Login</button></form>
                <?php } ?>
                <!-- <a class="link-lg login-link" type="submit" href="../Registration/registeration.html">Log In</a> -->
            </div>
        </div>
    </nav>
</div>
  <!--End Navbar -->
    </div>
<div class="grid">
  <div class="yaya">
    <div class="nana">
        <img src="/bloodproject(v2.0)/assets/images/Blood donation-pana.png" alt=""> 
   <div class="counter">
       <div class="baba">
           <h1>You don't have to be doctor to save lives</h1><br>
   <div class="jaja">
       <h5>We maintain a regular supply of all blood types to ensure the right blood is available to everyone who needs it We need enough of the right types of blood to meet day-to-day patient needs and to cope with emergencies</h5>
   </div>  

       </div>
   </div>
</div>
<div class="font"><H1b>Learn about Blood Type</H1>
    <i class='bx bx-donate-blood' ></i> </div></div><br>
<div class="contener mynana">
    <div class="card mytata" style="width: 22rem;">
        <div class="icon"><i class="fa-solid fa-a"><pb>+</p></i> </div>
        <div class="card-body">
          <h4 class="card-title">Blood Type A positve:</h3>
          <h5 class="card-text">you can give to A+,B+,AB+
            <br> you can receive from o+,o-,A+,A-
          </p>
          
        </div>
      </div>
      <div class="card mytata" style="width: 22rem;">
        <div class="icon"><i class="fa-solid fa-b"> <pb>+</p></i></div>
        <div class="card-body">
          <h4 class="card-title">Blood Type B positve:</h5>
          <h5 class="card-text"></p>
            <h5 class="card-text"> you can give to B+,AB+ <br>
            and you can recive from B+,B-</p>
        
        </div>
      </div>
      <div class="card mytata" style="width: 22rem;">
        <div class="icon"><i class="fa-solid fa-o"> <pb>+</p></i></div>
        <div class="card-body">
          <h4 class="card-title">Blood Type O positve: </h5>
          <h5 class="card-text">you can give to o+,A+,B+,AB+ <br>
        and you can recive from o+,o-</p>
          
        </div>
      </div>
      <div class="card mytata" style="width: 22rem;">
        <div class="icon"><i class="fa-solid fa-a"> <i class="fa-solid fa-b"></i><pb>+</p></i></div>
        <div class="card-body">
          <h4 class="card-title">Blood Type AB positve:</h5>
          <h5 class="card-text">you can give from AB+ only <br>
        you can recive from all blood types</p>
          
        </div>
      </div></div>
      <div class="contener mylove">
        <div class="card mytata " style="width: 22rem;">
            <div class="icon"><i class="fa-solid fa-o"> <pb>-</p></i></div>
            <div class="card-body">
              <h4 class="card-title">Blood Type O Negative</h5>
              <h5 class="card-text">you can give from all blood types  <br>
            and you can receive from o-</p>
             
            </div>
          </div>
          <div class="card mytata" style="width: 22rem;">
            <div class="icon"><i class="fa-solid fa-a"> <pb>-</p></i></div>
            <div class="card-body">
              <h4 class="card-title">Blood Type A Negative:</h5>
              <h5 class="card-text">you can give to B-,B+,AB-,AB- <br>
            you can receive from A-,o- </p>
             
            </div>
          </div>
          <div class="card mytata" style="width: 22rem;">
            <div class="icon"><i class="fa-solid fa-b"> <pb>-</p></i></div>
            <div class="card-body">
              <h4 class="card-title">Blood Type B Negative:</h5>
              <h5 class="card-text">you can give to B-,B+,AB-,AB- <br></AB>
              you can receive from B-,o-</p>
              
            </div>
          </div>
          <div class="card mytata" style="width: 22rem;">
            <div class="icon"><i class="fa-solid fa-a"> <i class="fa-solid fa-b"> </i><pb>-</p></i></div>
            <div class="card-body">
              <h4 class="card-title">Blood Type AB Negative:</h5>
              <h5 class="card-text"> you can give to AB-,AB <br>
            you can receive from AB-,A-,B-,O- </p>
              
            </div>
          </div>
          </div> </div>
</div>
<div class="end">
    <img src="/bloodproject(v2.0)/assets/images/Blood donation-rafiki.png" alt="">
    <div class="qoqo">
        <h1>Become a Doner</h1>
        <div class="sasa">
            <h5>If you donate money, you give food <br> but if you  donate blood you give life 
            </h5>
            <div class="button"><a href="/bloodproject(v2.0)/users/donationform.php" class="btn " role="button" data--="button">Become a Doner</a>
            </div>
        </div>
    </div>
</div>
<hr>
 <!-- Start Footer -->
 <div class="container-fluid d-flex mynav ">
    <footer class="w-100">
      <div class="row gx-0">
        <div class="col-lg-3">
            <a class="img-footer" href="#">
                <img src="/bloodproject(v2.0)/assets/images/footer_images.jpeg" alt="" class="Logo w-100 h-100">
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <h5 class="mb-3">Quick Links</h5>
          <ul class="nav flex-column text-center">
            <ul class="nav flex-column ">
            <li class="nav-item mb-2"><a href="/bloodproject(v2.0)/" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="/bloodproject(v2.0)/users/why.php" class="nav-link p-0 text-muted">Donation</a></li>
            <li class="nav-item mb-2"><a href="/bloodproject(v2.0)/users/about.php" class="nav-link p-0 text-muted">About Us</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Term &amp; Condition</a></li>
          </ul>
        </ul></div>
  
        <div class="col-lg-3 col-md-6 col-sm-12">
          <h5 class="mb-3">Useful Links</h5>
          <ul class="nav flex-column text-center">
            <ul class="nav flex-column">
            <li class="nav-item mb-2 location">
                <a href="https://www.google.com/maps/place/%D8%A7%D8%A8%D8%AF%D8%A7%D8%B9%E2%80%AD/@30.034049,31.2131685,17z/data=!3m1!4b1!4m5!3m4!1s0x145846d16a4ba20d:0x2cf2e9fa5f987e25!8m2!3d30.0339688!4d31.2110099" target="_blank" class="nav-link p-0 text-muted">Ebda3, 28 Gaber <br> Ibn Hayan, Ad <br> Doqi, Dokki</a>
                <span><img src="/bloodproject(v2.0)/assets/images/location-pin.png" alt="" class="d-flex"></span>
            </li>
            <li class="nav-item mb-2 telephone-call">
                <a href="#" class="nav-link p-0 text-muted">2035 4891 62831+</a>
                <span><img src="/bloodproject(v2.0)/assets/images/telephone-call.png" alt="" class="d-flex"></span>
            </li>
            <li class="nav-item mb-2 gmail">
                <a href="mailto:midoonabil22@gmail.com" class="nav-link p-0 text-muted">relive@mail.com</a>
                <span><img src="/bloodproject(v2.0)/assets/images/envelope.png" alt="" class="d-flex"></span>
            </li>
          </ul>
        </ul></div>
  
        <div class="col-lg-3 col-md-6 col-sm-12">
            <h5 class="mb-3">Work Hours</h5>
            <ul class="nav flex-column text-center">
              <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted opening-time">Mon – Fri: 8AM – 10PM</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted opening-time">Sat: 9AM – 8PM</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted opening-time">Sun: Closed</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted opening-time">We Work All The Holidays</a></li>
            </ul>
          </ul></div>
  
      <div class="d-flex justify-content-between pt-3 border-top">
        <p class="m-0">© 2021 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex m-0">
          <li class="ms-3"><a class="link-dark" href="#"> <img src="/bloodproject(v2.0)/assets/images/facebook.png" alt="" class="facebook-icon"></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><img src="/bloodproject(v2.0)/assets/Images/twitter.png" alt="" class="twitter-icon"></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><img src="/bloodproject(v2.0)/assets/Images/instagram.png" alt="" class="instagram-icon"></a></li>
          <li class="ms-3"><a class="link-dark" href="#"> <img src="/bloodproject(v2.0)/assets/Images/youtube.png" alt="" class="youtube-icon"></a></li>
        </ul>
      </div>
    </div>
  </footer>
  </div>
  <!-- end Footer -->
</body>
</html>