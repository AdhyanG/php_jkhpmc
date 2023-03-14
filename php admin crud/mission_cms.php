<?php

@include('../database.php');

 if(isset($_POST['add_content'])){

   $content =  mysqli_real_escape_string($db,$_POST['content']);
   // $current_time =  mysqli_real_escape_string($db,$_POST['current_time']);
   
 

  if(empty($content)){
       $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO `mission` (`mission_content`) VALUES ('$content')";
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
    mysqli_query($db, "DELETE FROM mission WHERE id= $id");
   header('location:mission_cms.php');
};

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>mission</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   

</head>
<body>
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
         <h3>Change Mission</h3>
         <textarea placeholder="enter content" name="content" class="box"></textarea>
        
         <input type="submit" class="btn" name="add_content" value="Add Content">
         
      </form>

   </div>
<?php
$sql='SELECT * FROM mission';
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
            <td><?=$post['mission_content']?></td>
            <td></td>
        
            <td>
               <a href="admin_update.php?edit=<?php echo $post['id'];?>" class="btn"><i class="fas fa-edit"></i>edit</a>
               <a href="mission_cms.php?delete=<?php echo $post['id'];?>" class="btn"><i class="fas fa-trash"></i>delete</a>

            </td>
         </tr>
                <?php

            }
            
         ?>
             
         </tr>
      
      </table>
   </div>

</div>
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>

</body>

</html>