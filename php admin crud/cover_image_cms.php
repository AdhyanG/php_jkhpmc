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
  <title>How to Make Dynamic Bootstrap Carousel with PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

<style>
   #last:hover{
      background-color:palevioletred;
   }
   
</style>
 </head>
 <body>
  <br />
 
  <!-- <div class="container">
  <div class="admin-product-form-container">

  <form method="post" enctype="multipart/form-data">

Slider Image Upload: <input type="file" name="file"><br><br>
<input  type="submit" name="submit" value="Upload Image">


</form>

  </div>
  </div> -->


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

 </body>
</html>