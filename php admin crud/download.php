<?php

@include('../database.php');
session_start();




// Define file name and path 
$fileName = $_SESSION['sum']; 

// $sql="SELECT pdf_file FROM expp WHERE sno='$sno'";
// $runCq=mysqli_query($db,$sql);
//  $result=mysqli_fetch_assoc($runCq);
//  $fileName=$result['pdf_file'];
$filePath = 'uploads/'.$fileName; 
 
if(!empty($fileName) && file_exists($filePath)){ 
    // Define headers 
    header("Cache-Control: public"); 
    header("Content-Description: File Transfer"); 
    header("Content-Disposition: attachment; filename=$fileName"); 
    header("Content-Type: application/zip"); 
    header("Content-Transfer-Encoding: binary"); 

    // Read the file 
    readfile($filePath); 
  session_unset();  
   session_destroy();
    exit; 
   //
      
}else{ 
    echo 'The file does not exist.'; 
}


 ?>

 