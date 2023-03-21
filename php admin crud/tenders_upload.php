<?php

$db = mysqli_connect('localhost', 'root', '', 'jkhpmc');
 


// File upload path

$query='SELECT * FROM tenders';
$result=mysqli_query($db,$query);
$files=mysqli_fetch_all($result,MYSQLI_ASSOC);

 if(isset($_POST['add_content'])){

   $dated =  mysqli_real_escape_string($db,$_POST['dated']);
   $notification_title =  mysqli_real_escape_string($db,$_POST['notification_title']);
   $notification_pdf=$_FILES['file']['name'];
   $notification_pdf_temp_name=$_FILES['file']['tmp_name'];
   $destination="uploads/".$notification_pdf;
   $extension=pathinfo($notification_pdf,PATHINFO_EXTENSION);


if(move_uploaded_file($notification_pdf_temp_name,$destination))
{
  

   if(empty($dated)||empty($notification_title)||empty( $notification_pdf)){

      $message[] = 'please fill out all';
  }else{
     $insert = "INSERT INTO `tenders` (`dated`,`notification_title`,`pdf_file`) VALUES ('$dated','$notification_title','$notification_pdf')";
      $upload = mysqli_query($db,$insert);
     if($upload){
        move_uploaded_file($notification_pdf_temp_name, $destination);
        $message[] = 'new content added successfully';
     }else{
        $message[] = 'could not add the content';
      }
   }
   header('location:tenders_cms.php');
}
else{
   echo("try again");
}


  
  
header('location:tenders_cms.php');
   
   
 

  

};


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
 
    // fetch file to download from database
    $sql = "SELECT * FROM expp WHERE sno=$id";
    $result = mysqli_query($db, $sql);
 
    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['pdf_file'];
 
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['pdf_file']));
        readfile('uploads/' . $file['pdf_file']);
 
        // Now update downloads count

        exit;
    }
 
}


?>


