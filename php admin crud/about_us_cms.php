<?php

@include('../database.php');

 if(isset($_POST['add_content'])){

   $content =  mysqli_real_escape_string($db,$_POST['content']);
   // $current_time =  mysqli_real_escape_string($db,$_POST['current_time']);
   
 

  if(empty($content)){
       $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO `about_us` (`content`) VALUES ('$content')";
       $upload = mysqli_query($db,$insert);
      if($upload){
         // move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new content added successfully';
      }else{
         $message[] = 'could not add the content';
       }
    }

};

 if(isset($_GET['delete'])){
   $id = $_GET['delete'];
    mysqli_query($db, "DELETE FROM about_us WHERE about_us_id = $id");
   header('location:about_us_cms.php');
};

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us cms</title>

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
        <h1 class="text-light"><a href="index.html">Admin</a></h1>
        
      </div>

   <nav id="navbar" class="nav-menu navbar">
  <?php
  $page = basename($_SERVER['PHP_SELF']);
?>

<ul class="nav-menu">
  <li><a href="home.php" class="nav-link <?php if ($page == 'home.php') { echo 'active'; } ?>"><i class="bx bx-envelope"></i> <span>Home</span></a></li>
  <li><a href="about_us_cms.php" class="nav-link <?php if ($page == 'about_us_cms.php') { echo 'active'; } ?>"><i class="bx bx-user"></i> <span>About us</span></a></li>
  <li><a href="mission_cms.php" class="nav-link <?php if ($page == 'mission_cms.php') { echo 'active'; } ?>"><i class="bx bx-file-blank"></i> <span>Mission</span></a></li>
  <li><a href="objectives_cms.php" class="nav-link <?php if ($page == 'objectives_cms.php') { echo 'active'; } ?>"><i class="bx bx-book-content"></i> <span>Objectives</span></a></li>
  <li><a href="tenders_cms.php" class="nav-link <?php if ($page == 'tenders_cms.php') { echo 'active'; } ?>"><i class="bx bx-envelope"></i> <span>Tenders</span></a></li>
  <li><a href="product_cms.php" class="nav-link <?php if ($page == 'product_cms.php') { echo 'active'; } ?>"><i class="bx bx-envelope"></i> <span>Products</span></a></li>
  <li><a href="public_cms.php" class="nav-link <?php if ($page == 'public_cms.php') { echo 'active'; } ?>"><i class="bx bx-envelope"></i> <span>Public Notices</span></a></li>
  <li><a href="expp_cms.php" class="nav-link <?php if ($page == 'expp_cms.php') { echo 'active'; } ?>"><i class="bx bx-envelope"></i> <span>Expression of Interest</span></a></li>
  <li><a href="cover_image_cms.php" class="nav-link <?php if ($page == 'cover_image_cms.php') { echo 'active'; } ?>"><i class="bx bx-server"></i> <span>Cover Images</span></a></li>
  <li><a href="committee_cms.php" class="nav-link <?php if ($page == 'committee_cms.php') { echo 'active'; } ?>"><i class="bx bx-envelope"></i> <span>Committee Of JKHPMC</span></a></li>
</ul>

</nav>
<!-- .nav-menu -->
    </div>
    <a href="logout.php" target="_self">
  <i class="fa fa-sign-out animated"></i>
</a>

</header>

<!--Navbar code end-->
   <!-- logout code -->


<?php
if(isset($message))
{
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
      

   }

}

?>

 
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Change About us</h3>
         <textarea placeholder="enter content" name="content" class="box"></textarea>
        
         <input type="submit" class="btn" name="add_content" value="Add Content">
         
      </form>

   </div>
<?php
$sql='SELECT * FROM about_us';
$select=mysqli_query($db,$sql);
?>
  

   
   
   
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Content</th>
            <th>Time</th>
        
            <th>action</th>
         </tr>
         </thead>
         <?php
            while($post=mysqli_fetch_assoc($select))
            {
           ?>
            <tr>
            <td><p style="overflow:hidden;-webkit-line-clamp:1;display:-webkit-box;-webkit-box-orient:vertical;"><?=$post['content']?></p></td>
            <td></td>
        
            <td>
               <a href="aboutus_update.php?edit=<?php echo $post['about_us_id'];?>" class="btn"><i class="fas fa-edit"></i>edit</a>
               <a href="admin_page.php?delete=<?php echo $post['about_us_id'];?>" class="btn"><i class="fas fa-trash"></i>delete</a>

            </td>
         </tr>
                <?php

            }
            
         ?>
             
         </tr>
      
      </table>
   </div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>
</html>