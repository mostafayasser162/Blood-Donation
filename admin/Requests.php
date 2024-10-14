<?php

include "../shared/connection.php";

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location:dashboard.php");
}

$select= "SELECT * FROM `request`  JOIN `user` ON  `request`.user_id = `user`.user_id";
$run_select= mysqli_query($connect, $select);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank</title>
    <link rel="stylesheet" href="./Assets/Button.css ">
    <link rel="stylesheet" href="./Assets/all.min.css">
    <meta content="description">
    <meta charset="utf-8" />
    <style></style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Babylonica&family=Beau+Rivage&family=Cairo:wght@300&family=Noto+Sans+Arabic&display=swap" rel="stylesheet">
</head>
<body>
     <!--Start Navbar -->
     <div class="Header">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./Assets/Images/photo1661089274 (1).jpeg" alt="" class="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Users.php">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Donations.php">Donations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Requests.php" style="color: #c6414c;">Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Feedback.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addcondition.php">Add Condition</a>
                        </li>
                    </ul>
                    <form  method="POST">
                        <button class="btn btn-lg login-link" type="submit" name="logout">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->
    <!-- Start Table Data Section -->
    <div class="container mt-4">
        <div class="row w-100 gx-0">
            <div class="col-lg-12">
                <table class="table table-$red-300 table-striped" style="background-color: white ;">
                <thead>
            <tr>
                <th>User Name</th>
                <th>User Id</th>
                <th>User Email</th>
                <th>Reason</th>
                <th>File</th>
                <th>Blood Type</th>
                <th>Liters</th>
                <th>Address(Delivery)</th>
               


</tr>
</thead>
<tbody> 
<?php foreach($run_select as $record){?>
        <tr>   
    <td><?php echo $record['user_name'];?></td>
    <td><?php echo $record['user_id'];?></td>
    <td><?php echo $record['user_email'];?></td>
    <td><?php echo $record['reason'];?></td>
    <td><?php echo $record['file'];?></td>
    <td><?php echo $record['bloodtype'];?></td>
    <td><?php echo $record['liter'];?></td>
    <td><?php echo $record['address'];?></td>
 
</tr>
   <?php } ?>
</tbody>
</table>
                </div>
        </div>
    </div>
    <!-- End Table Data Section -->
</body>
</html> 