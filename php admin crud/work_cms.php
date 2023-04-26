<?php

@include_once './submit.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Work Flow ocms</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- custom css file link  -->
  <!-- <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css"> -->

  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>


</head>

<body>
<div class="container">
  <div class="ed-form">

  <?php if(!empty($statusMsg)){ ?>
    <p class="stmsg"><?php echo $statusMsg; ?></p>


  <?php } ?>

<form method="post" action="">
    <textarea name="editor" id="editor" rows="10" cols="80">
    This is my textarea to be replaced with HTML editor.
    </textarea>
    <input type="submit" name="submit" value="SUBMIT">
</form>

</div>
<?php if(!empty($editorContent))
{
  ?>
<div class="ed-cont">
  <?php echo $editorContent;?>
</div>

<?php  
}

?>

</div>
  <script>
  CKEDITOR.replace('editor');
  </script>



  <!--Navbar code end-->





  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.slim.js"
    integrity="sha512-G1QAKkF7DrLYdKiz55LTK3Tlo8Vet2JnjQHuJh+LnU0zimJkMZ7yKZ/+lQ/0m94NC1EisSVS1b35jugu3wLdQg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
  </script> -->

</body>

</html>