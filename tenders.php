<?php
require('database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>J&K HOTICULTURAL PRODUCE MARKETING & PROCESSING CORPORATION LTD.</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src=" https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js">
       
    </script>
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid  px-5 d-none d-lg-block" style="background-color: #2a660e;">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"></i>Government of Jammu and Kashmir</small>
                    
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    
                    <small class="me-3 text-light"></i>حکومت جموں و کشمی</small>
                    
                </div>

            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg px-5 py-3 py-lg-0" id="nav" style="background-color:white">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i></h1>
            </a>
            
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Organization</a>
                        <div class="dropdown-menu m-0">
                            <a href="aboutus.php" class="dropdown-item">About Us</a>
                            <a href="./mission.php" class="dropdown-item">Mission</a>
                            <a href="./objectives.php" class="dropdown-item">Objectives</a>
                            <a href="./activities.php" class="dropdown-item">Activities</a>
                            <a href="directors.php" class="dropdown-item">Board of Directors</a>
                            <a href="./committee.php" class="dropdown-item">Committee JKHMPC</a>
                            <a href="./contact.php" class="dropdown-item">Telephone Directory</a>
                            

                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Notifications</a>
                        <div class="dropdown-menu m-0">
                            <a href="tenders.php" class="dropdown-item">Tenders</a>
                            <a href="expp.php" class="dropdown-item">Expression of Interest</a>
                            <a href="public.php" class="dropdown-item">Public Interest</a>
                            
                        </div>
                    </div>

                    <a href="products.php" class="nav-item nav-link">Products</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                        <div class="dropdown-menu m-0">
                            <a href="photos.php" class="dropdown-item">Photos</a>
                            <a href="videos.php" class="dropdown-item">Videos</a>
                           
                        </div>
                    </div>
                    <a href="work.php" class="nav-item nav-link">Work Plan</a>

                    <a href="right.php" class="nav-item nav-link">Right To Information</a>

                    <a href="contact.php" class="nav-item nav-link">Contact</a>

                </div>

               
            </div>
        </nav>
        <div class="container-fluid  py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Tenders</h1>
                    <a href="" class="h5 text-white">Notifications</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Tenders</a>
                </div>
            </div>

        </div>
        
    </div>

    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Dated</th>
      <th scope="col">Notification Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody> 

  <?php
  $tenderQuery="SELECT * FROM tenders";
  $runCq=mysqli_query($db, $tenderQuery);
  while($post=mysqli_fetch_assoc($runCq))
  {
   ?> 

    <tr>
      <th scope="row"><?=$post['sno']?></th>
      <td><?=$post['dated']?></td>
      <td><?=$post['notification_title']?></td>
      <td><input type="file" id="myfile" name="myfile"></td>
    </tr>
<?php
  }

  ?>
  </tbody>
</table>




    <div class="container-fluid text-white" style="background-color:rgba(11,12,11,.8627450980392157);">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 100px;">
                         
                            Website Designed and Developed by Jammu and Kashmir e-Governance Agency (JaKeGA), ITD
						
					
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


















 <!-- dataTable function -->
<script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    

<script>
        $(document).ready(function () {
    $('#myTable').DataTable();
});
    </script>

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>