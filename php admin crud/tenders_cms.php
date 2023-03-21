<?php


include './tenders_upload.php';

 if(isset($_GET['delete'])){
   $id = $_GET['delete'];
    mysqli_query($db, "DELETE FROM tenders WHERE sno= $id");
   header('location:tenders_cms.php');
};

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tenders cms</title>

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

      <form action="./tenders_upload.php" method="post" enctype="multipart/form-data">
         <h3>Tenders</h3>
         
         <input type="text" placeholder="YYYY-MM-DD" name="dated" class="box"></input>
         <input type="text" placeholder="enter title" name="notification_title" class="box"></input>
         <input type="file" id="file" name="file" class="box">
         <input type="submit" class="btn" name="add_content" value="Add Content">
         
         

         <!-- <a href="./upload.php"><input class="btn" type="submit" value="Upload"></input></a> -->
        
       
         
      </form>

   </div>
<?php
$sql='SELECT * FROM tenders';
$select=mysqli_query($db,$sql);
?>
  

   
   
   
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>Sno</th>
            <th>Dated</th>
            <th>Notification title</th>
           

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
            <td><p style="overflow:hidden;-webkit-line-clamp:1;display:-webkit-box;-webkit-box-orient:vertical;"><?=$post['notification_title']?></p></td>
       
            
        
            <td>
               <a href="admin_update.php?edit=<?php echo $post['sno'];?>" class="btn"><i class="fas fa-edit"></i>edit</a>
               <a href="tenders_cms.php?delete=<?php echo $post['sno'];?>" class="btn"><i class="fas fa-trash"></i>delete</a>

            </td>
         </tr>
                <?php

            }
            exit();
            
            
         ?>
             
         </tr>
      
      </table>
   </div>

</div>


</body>

</html>