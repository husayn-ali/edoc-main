<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-fluid">
<?php  session_start();

include_once("./includes/header.php")  ?>    
<?php // include_once("./includes/navbar.php")  ?> 
<?php  //include_once("./includes/sidebar.php")  ?> 
    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Sign Up </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
              </ol>
            </nav>
          </div>
          <div class="row">
<?php

//learn from w3schools.com
//Unset all the server side variables


$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Africa/Nairobi');
$date = date('Y-m-d');

$_SESSION["date"]=$date;



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'nic'=>$_POST['nic'],
        'dob'=>$_POST['dob']
    );


    print_r($_SESSION["personal"]);
    header("location: create-account.php");




}

?>


   
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sign Up</h5>
              <form action="" method="POST">
                <div class="mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="mb-3">
                  <label for="lname" class="form-label">Last Name</label>
                  <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Address" required>
                </div>
                <div class="mb-3">
                  <label for="nic" class="form-label">NIC</label>
                  <input type="text" name="nic" class="form-control" placeholder="NIC Number" required>
                </div>
                <div class="mb-3">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input type="date" name="dob" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button type="submit" class="btn btn-primary">Next</button>
                </div>
              </form>
              <div class="mt-3 text-center">
                <p>Already have an account? <a href="login.php" class="text-decoration-none">Login</a></p>
              </div>
            </div>
          </div>
        </div>

    </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- endinject -->
  </body>
</html>