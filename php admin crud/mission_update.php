<?php

@include '../database.php';

$id = $_GET['edit'];
if(isset($_POST['update_product'])){

   $content =  mysqli_real_escape_string($db,$_POST['content']);
   // $current_time =  mysqli_real_escape_string($db,$_POST['current_time']);
   
 

  if(empty($content)){
       $message[] = 'please fill out all';
   }else{
      $update = "UPDATE mission SET mission_content ='$content'"; 
       $upload = mysqli_query($db,$update);
      if($upload){
         // move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new content updated
         successfully';
      }else{
         $message[] = 'could not update the content';
       }
    }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($db, "SELECT * FROM mission WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <textarea type="text" class="box" name="content" value="<?php echo $row['mission_content']; ?>" placeholder="enter the product name"></textarea>
     
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="mission_cms.php" class="btn">go back!</a>
   </form>
   


   <?php }
   ;
   
   ?>

   

</div>

</div>

</body>
</html>