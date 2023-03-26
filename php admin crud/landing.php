<?php

@include('../database.php');
session_start();
// if(!isset($_SESSION['loggedin'])){
//   echo("<script>alert('Login to access the view page.');
//   window.location.href='home.php';</script>
//   ");
// }


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Landing Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/navbar.css">

   
   

</head>
<body>

<!--Navbar code start-->

<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="images/emblem.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="landing.php">Admin Panel</a></h1>
        
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
        <li><a href="landing.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Home</span></a></li>
          <li><a href="about_us_cms.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>About us</span></a></li>
          <li><a href="mission_cms.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Mission</span></a></li>
          <li><a href="objectives_cms.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Objectives</span></a></li>
          <li><a href="tenders_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Tenders</span></a></li>
          <li><a href="product_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Product</span></a></li>
          <li><a href="public_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Public Notices</span></a></li>
          <li><a href="expp_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Expression of Interest</span></a></li>
          <li><a href="cover_image_cms.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Cover Images</span></a></li>
          <li><a href="committee_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Committee Of JKHPMC</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
    <a href="logout.php" target="_self">
  <i class="fa fa-sign-out animated"></i>
</a>

</header>

<!--Navbar code end-->

<h2>CONTENT MANAGEMENT SYSTEM FOR JKHPMC</h2>
</body>
</html>