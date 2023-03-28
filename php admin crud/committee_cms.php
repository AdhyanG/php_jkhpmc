<?php

@include('../database.php');
session_start();

 if(isset($_POST['add_content'])){

   $name =  mysqli_real_escape_string($db,$_POST['name']);
   $designation=mysqli_real_escape_string($db,$_POST['designation']);
   // $current_time =  mysqli_real_escape_string($db,$_POST['current_time']);
   
 

  if(empty($name)||empty($designation)){
       $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO `committe` (`name`,`designation`) VALUES ('$name','$designation')";
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
    mysqli_query($db, "DELETE FROM committe WHERE sno= $id");
   header('location:committee_cms.php');
};

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Committe cms</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/navbar.css">

   

</head>
<body>
   <!-- Button trigger modal -->


<!-- Modal -->


<!--Navbar code start-->

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
      </nav><!-- .nav-menu -->
    </div>
    <a href="logout.php" target="_self">
  <i class="fa fa-sign-out animated"></i>
</a>

</header>

<!--Navbar code end-->
   
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
         <h3>Change Committe Members</h3>
         <input type="text" placeholder="enter name" name="name" class="box"></input>
         <input type="text" placeholder="enter designation" name="designation" class="box"></input>
        
         <input type="submit" class="btn" name="add_content" value="Add Content">
          
      </form>

   </div>
<?php
$sql='SELECT * FROM committe';
$select=mysqli_query($db,$sql);
?>
  
<!-- MODAL
    -->
    <!-- Button trigger modal -->

   
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Sno</th>
            <th>Name</th> 
            <th>Designation</th>
            <th>Action</th>
         </tr>
         </thead>
         <?php
            while($post=mysqli_fetch_assoc($select))
            {
           ?>
            <tr>
            <td><?=$post['sno']?></td>
            <td><?=$post['name']?></td>
            <td><?=$post['designation']?></td>
        
            <td>
            <a href="committee_update.php?edit=<?php echo $post['sno'];?>" class="btn"><i class="fas fa-trash"></i>
                                                Edit
                                                        </button>
               <a href="committee_cms.php?delete=<?php echo $post['sno'];?>" class="btn"><i class="fas fa-trash"></i>delete</a>

            </td>
         </tr>
                <?php

            }
            
         ?>
             
         </tr>
      
      </table>
   </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.slim.js" integrity="sha512-G1QAKkF7DrLYdKiz55LTK3Tlo8Vet2JnjQHuJh+LnU0zimJkMZ7yKZ/+lQ/0m94NC1EisSVS1b35jugu3wLdQg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>