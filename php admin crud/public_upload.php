<?php
$db=mysqli_connect('localhost','root','','jkhpmc');

if(isset($_POST['add_content']))
{
  $dated=mysqli_real_escape_string($db,$_POST['dated']);
  $notification_title=mysqli_real_escape_string($db,$_POST['notification_title']);
  $file_name=$_FILES['file']['name'];
  $file_tmp_name=$_FILES['file']['tmp_name'];
  $destination="uploads/".$file_name;
  $extension=pathinfo($file_name,PATHINFO_EXTENSION);

  if(move_uploaded_file($file_tmp_name,$destination))
  {


 if(empty($dated)||empty($notification_title)||empty($file_name))
 {
  
echo'<script>alert("Incomplete Information")</script>';
 }
 else{
  $insert="INSERT INTO `public`(`dated`,`notification_title`,`pdf_file`)VALUES('$dated','$notification_title','$file_name')";
  $upload=mysqli_query($db,$insert);
  if($upload)
  {
    move_uploaded_file($file_tmp_name,$destination);
  
    echo'<script>alert("New Content Added Successfully")</script>';

  }
  else{

    echo'<script>alert("could not add the content")</script>';
  }


 }
 header('location:public_cms.php');

  }



};



?>