<?php

@include '../database.php';

$id = $_GET['edit'];
if(isset($_POST['update_product'])){

  $product_name = $_POST['product_name'];
  $product_content = mysqli_escape_string($db, $_POST['product_content']);
  $product_image = $_FILES['product_image']['name'];
  $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
  $product_image_folder = 'uploaded_img/'.$product_image;

  if(empty($product_name) || empty($product_content) || empty($product_image)){
     $message[] = 'please fill out all!';    
  }else{

     $update_data = "UPDATE products SET product_name='$product_name', product_about='$product_content', product_image='$product_image'  WHERE id = '$id'";
     $upload = mysqli_query($db, $update_data);

     if($upload){
        move_uploaded_file($product_image_tmp_name, $product_image_folder);
        header('location:product_update.php');
     }else{
        $$message[] = 'please fill out all!'; 
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
      
      $select = mysqli_query($db, "SELECT * FROM products WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the product</h3>
      <input type="text" class="box" name="product_name" value="<?php echo $row['product_name']; ?>" placeholder="enter the product name"></input>
      <textarea type="text" placeholder="enter description" name="product_content" value="<?php echo $row['product_about']; ?>" class="box"></textarea>
      <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" value="<?php echo $row['product_image']; ?>" class="box">
     
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="product_cms.php" class="btn">go back!</a>
   </form>
   


   <?php }
   ;
   
   ?>

   

</div>

</div>

</body>
</html>