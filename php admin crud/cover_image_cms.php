<?php
//index.php
session_start();
require('../database.php');




if(isset($_REQUEST["submit"]))
{
	$file=$_FILES['file']['name'];
	$tmp_name=$_FILES['file']['tmp_name'];
   $path="images/".$file;
   move_uploaded_file($tmp_name,$path);

   mysqli_query($db,"INSERT INTO slider(image)VALUES('$file')");
  
   

}



?>
<!DOCTYPE html>
<html>
 <head>
  
  <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cover Iamge</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/navbar.css">




 </head>
 <body>
  
  <!--navbar start-->
  <header id="header">
  
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="images/emblem.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Admin</a></h1>
        
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
        <li><a href="home.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Home</span></a></li>
          <li><a href="about_us_cms.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>About us</span></a></li>
          <li><a href="mission_cms.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Mission</span></a></li>
          <li><a href="objectives_cms.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Objectives</span></a></li>
          <li><a href="tenders_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Tenders</span></a></li>
          <li><a href="product_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Products</span></a></li>
          <li><a href="public_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Public Notices</span></a></li>
          <li><a href="expp_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Expression of Interest</span></a></li>
          <li><a href="cover_image_cms.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Cover Images</span></a></li>
          <li><a href="committee_cms.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Committee Of JKHPMC</span></a></li>
        </ul>
      </nav>
    </div>
    <a href="logout.php" target="_self">
      <i class="fa fa-sign-out animated"></i></a>

</header>

<!--navbar end-->
  

  <div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Select Cover Images</h3>
        
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="file" class="box">
         
         <input id="last" type="submit" class="btn" name="submit" value="Upload Image"
         >
      </form>

   </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>

 </body>
</html>