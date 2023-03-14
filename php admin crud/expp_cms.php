<?php

@include('../database.php');

 if(isset($_POST['add_content'])){

   $dated =  mysqli_real_escape_string($db,$_POST['dated']);
   $notification_title =  mysqli_real_escape_string($db,$_POST['notification_title']);
   $notification_pdf=$_FILES['file']['name'];
   $notification_pdf_temp_name=$_FILES['file']['tmp_name'];
if(move_uploaded_file($notification_pdf_temp_name,"uploads/".$notification_pdf))
{
   header('location:expp_cms.php');
}
else{
   echo("try again");
}

  
  
   
   
   
 

  if(empty($dated)||empty($notification_title)||empty( $notification_pdf)){
       $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO `expp` (`dated`,`notification_title`,`pdf_file`) VALUES ('$dated','$notification_title','$notification_pdf')";
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
    mysqli_query($db, "DELETE FROM expp WHERE sno= $id");
   header('location:expp_cms.php');
};

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>expp</title>

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

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
         <h3>Expression Of Interest</h3>
         <input type="text" placeholder="YYYY-MM-DD" name="dated" class="box"></input>
         <input type="text" placeholder="enter title" name="notification_title" class="box"></input>
         <input type="file" id="file" name="file" class="box">
         <input type="submit" class="btn" name="add_content" value="Add Content">
         
         

         <!-- <a href="./upload.php"><input class="btn" type="submit" value="Upload"></input></a> -->
        
       
         
      </form>

   </div>
<?php
$sql='SELECT * FROM expp';
$select=mysqli_query($db,$sql);
?>
  

   
   
   
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Sno</th>
            <th>Dated</th>
            <th>Notification title</th>
            <th>Pdf name</th>
            <th>action</th>
         </tr>
         </thead>
         <?php
            while($post=mysqli_fetch_assoc($select))
            {
           ?>
            <tr>
            <td><?=$post['sno']?></td>
            <td><?=$post['dated']?></td>
            <td><?=$post['notification_title']?></td>
            <td><?=$post['pdf_file']?></td>
        
            <td>
               <a href="admin_update.php?edit=<?php echo $post['sno'];?>" class="btn"><i class="fas fa-edit"></i>edit</a>
               <a href="expp_cms.php?delete=<?php echo $post['sno'];?>" class="btn"><i class="fas fa-trash"></i>delete</a>

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