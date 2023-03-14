<?php

@include('../database.php');

 if(isset($_POST['submit'])){

   
  
   $notification_pdf=$_FILES['file']['name'];
   $notification_pdf_temp_name=$_FILES['file']['tmp_name'];
if(move_uploaded_file($notification_pdf_temp_name,"uploads/".$notification_pdf))
{
   header('location:expp_cms.php');
}
else{
   echo("try again");
}
 }
 ?>

 echo(<a href="./uploads/<?php echo $notification_pdf;?>">Click here to download</a>)