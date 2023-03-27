<?php
require('./database.php');
// mysqli_select_db($db,"jkhpmc");
$query='SELECT * FROM slider';
$runQuery=mysqli_query($db,$query);
$rowcount=mysqli_num_rows($runQuery);

//

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>J&K HOTICULTURAL PRODUCE MARKETING & PROCESSING CORPORATION LTD.</title>
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

   

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- External Stylesheet -->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/logotext.css" rel="stylesheet">

     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
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


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg px-5 py-3 py-lg-0" id="nav" style="background-color:white">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="logo-container">
                <img src="img/emblem-dark.png" alt="Logo" class="logo-img">
                <span class="logo-text">J&amp;K Hoticultural Produce Marketing &amp; Processing Corporation Ltd.</span>
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-expanded="true">
            <span class="fa fa-bars"></span>
        </button>
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
                            <a href="./telephone.php" class="dropdown-item">Telephone Directory</a>
                            

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

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
     
   
     

         
            <div class="carousel-inner">
            <?php
     for($i=0;$i<$rowcount;$i++)
     {
          $row=mysqli_fetch_array($runQuery);

        ?>
<?php

if($i==1)
{
    ?>





                <div class="carousel-item active">
                    <img class="w-100 " style="height:400px;"src="./php admin crud/images/<?=$row['image'];?>" alt="Image">
                </div>
<?php
}
else
{
?>
  <div class="carousel-item ">
                    <img class="w-100 " style="height:400px;"src="./php admin crud/images/<?=$row['image'];?>" alt="Image">
                </div>
<?php
}
?>
                   
  
                
                <?php
     }
     ?>
           
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4" 
                    style="height: 180px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" 
                        style="width: 60px; height: 60px;">
                        <i class="fas fa-star text-secondary"></i>

                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Fruits</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">6</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" 
                    style="height: 180px;">
                        <div class="bg-secondary d-flex align-items-center justify-content-center rounded mb-2"
                         style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-secondary mb-0">DryFruits</h5>
                            <h1 class="text-secondary mb-0" data-toggle="counter-up">3</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary shadow d-flex align-items-center justify-content-center p-4"
                     style="height: 180px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fas fa-star text-secondary"></i>

                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Seeds</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">2</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


 <!--Image-->
 <div class="image-row">
    <div class="image-container">
      <img src="IMG/team-1.jpg" alt="Image 1">
      <div class="image-text">
        <h5>Sh. Manoj Sinha</h5>
        <p>Honourable Lieutenant Governor, Union Territory of Jammu and Kashmir</p>
      </div>
    </div>
    <div class="image-container">
      <img src="img/team-2.jpg" alt="Image 2">
      <div class="image-text">
        <h5>Sh. Rajeev Rai Bhatnagar</h5>
        <p>Advisor to Hon'ble LG, Govt. of UT of J&K</p>
      </div>
    </div>
    <div class="image-container">
      <img src="img/team-3.jpg" alt="Image 3">
      <div class="image-text">
        <h5>Sh. Atal Dulloo (IAS)</h5>
        <p>Financial Commissioner, Agriculture Production Department</p>
      </div>
    </div>
    <div class="image-container">
      <img src="img/t.png" alt="Image 4">
      <div class="image-text">
        <h5>Imam Din</h5>
        <p>Managing Director</p>
      </div>
    </div>
  </div>
  
  
  <!--Image-->

  <!--ABOUT-->

  <div class="about-container">
  <h2 class="about-heading">Jammu&amp; Kashmir Horticultural Produce Marketing and Processing Corporation Ltd.</h2>
  <div class="about-text">
    <p>JKHPMC Jammu&amp; Kashmir Horticultural Produce Marketing and Processing Corporation Ltd. popularly known as JKHPMC was established in the year 1978 as State Public Undertaking with the objective to develop, aid, assist, initiate, promote, organise fresh fruits production, marketing processing, warehousing and cold storing and processing of all types of fruits. It has developed the most modern system of marketing in the country. Most unique characteristic of this organization is that it provides all the services to the fruit growers, which are required for marketing of fruits. Since its inception, Corporation has engaged itself in establishment of pre and post-harvest activities, comprising of an integrated network of mechanised pack- houses, cold storages, trans-shipment centers and fruit processing plants, besides a net-work of sales offices in the terminal markets, railways stations and airports throughout the country.</p>
  </div>
  <a href="aboutus.html" class="read-more">Read More</a>
</div>

  <!--ABOUT-->
   
<!--Tables-->
<div class="tab">
  <button class="tablinks active" data-tab="tenders">Tenders</button>
  <button class="tablinks" data-tab="public_notices">Public Notices</button>
  <button class="tablinks" data-tab="expressions">Expressions</button>
</div>

<div style="overflow: auto" id="tenders" class="tabcontent active">
  <table class="ui celled selectable unstackable table">
    <thead class="">
      <tr class="center aligned">
        <th class="">S.No</th>
        <th class="">Dated</th>
        <th class="">Title</th>
        <th class="">Downlaod/View</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td class="date">2023-03-25</td>
        <td>Date extension notice in respect of E-NIT 01 of 2023, Dated 06-03-2023.</td>
        <td><a href="#">Download</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td class="date">2023-03-25</td>
        <td>FRESH SHORT TERM NOTICE FOR AUCTION OF FRUIT CROP & GREEN GRASS.</td>
        <td><a href="#">Download</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td class="date">2023-03-23</td>
        <td>Notice inviting e-Tenders, Tender Reference No: 03 of 2023 under “Single Cover System” from reputed-registered Principal Manufacturing Firms/Companies/Agencies, their authorized distributors &amp; dealers for the “Empanelment of Agencies (for a period of one year) for the Finalization of Annual Rate Contracts for supply of Plant Protection (PP) Chemicals, Organic Fertilizers/Manures and Vermicompost duly approved by the Agriculture Department."	
</td>
        <td><a href="#">Download</a></td>
      </tr>
      <td>4</td>
        <td class="date">2023-03-20</td>
        <td>Notice inviting e-Tenders, e-NIT No : 02 of 2023 under “Single Cover System” from reputed- registered Principal Manufacturing Firms/Companies/Agencies, their authorized distributors &amp; dealers for the “Empanelment of Agencies (for a period of one year) for the Finalization of Annual Rate Contracts for supply of Agricultural Machinery Equipment and other allied branded items with ISI/BIS marking issued vide No: JKHPMC/FA/23/787, Dated: 20.03.2023 .</td>
        <td><a href="#">Download</a></td>
      </tr>
      <td>5</td>
        <td class="date">2023-03-06</td>
        <td>Notice inviting tenders for selection of agency for providing Engineering and Project management consultancy to JKHPMC, Tender Reference No ; 01 of 2023, dated 06-03-2023.</td>
        <td><a href="#">Download</a></td>
      </tr>
      <td>6</td>
        <td class="date">2023-01-19</td>
        <td>" Retender Corrigendum w.r.t e-NIT No. 119 of 2022, Dated 07-12-2022"</td>
        <td><a href="#">Download</a></td>
      </tr>
      <td>7</td>
        <td class="date">2023-01-19</td>
        <td> "  Retender Corrigendum w.r.t e-NIT No. 118 of 2022, Dated 07-12-2022" .</td>
        <td><a href="#">Download</a></td>
      </tr>
      
    </tbody>
  </table>
</div>

<div style="overflow: auto"id="public_notices" class="tabcontent">
  <table class="ui celled selectable unstackable table">
    <thead class="">
      <tr class="center aligned">
        <th class="">S.No</th>
        <th class="">Dated</th>
        <th class="">Title</th>
        <th class="">Download/View</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td class="date">20-01-2022<</td>
        <td>Bid Opening cum Technical Evaluation Summary in respect of this Office EOI No : JKHPMC/MD/22/147 Dated: 20-01-2022</td>
        <td><a href="#">Download</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td class="date">2/1/2022</td>
        <td>Corrigendum w.r.t EOI vide No. JKHPMC/MD/22/147, dated 20-01-2022</td>
        <td><a href="#">Download</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td class="date">1/20/2022</td>
        <td>Expression of Interest (EOI) for empanelment of Manufacturers and Registered Indian Importers for supply of Tree Spray Oil (TSO)/Horticulture Mineral Oil (HMO) at JKHPMC’s Headquarter, Srinagar and its various Regional Offices in J&K, India, for a period of One (01) Year</td>
        <td><a href="#">Download</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div style="overflow: auto" id="expressions" class="tabcontent">
  <table class="ui celled selectable unstackable table">
    <thead class="">
      <tr class="center aligned">
        <th class="">S.No</th>
        <th class="">Dated</th>
        <th class="">Title</th>
        <th class="">Downlaod/View</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td class="date">3/8/2023	</td>
        <td>NOTICE FOR SHORT TERM QUOTATION</td>
        <td><a href="#">Download</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td class="date">2/20/2023</td>
        <td>''PARVAZ BROCHURE''</td>
        <td><a href="#">Download</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td class="date">12/10/2022	</td>
        <td>Auction of Old Building structures at JKHPMC's land bank at Doabgah,Sopore,Auction notice 03 of 2022,Dated: 7-12-2022</td>
        <td><a href="#">Download</a></td>
      </tr>
    </tbody>
  </table>
</div>


  <!--Tables-->

  <!--photogallery-->

<section class="photo-gallery">
    <h3>Products</h3>
  <div class="gallery-container">
    <img src="img/productimg/apple.jpg" alt="Photo 1">
    <img src="img/productimg/saffron.png" alt="Photo 2">
    <img src="img/productimg/honey.png" alt="Photo 3">
    <img src="img/productimg/rajma.jpg" alt="Photo 4">
    <img src="img/productimg/appricots.jpg" alt="Photo 5">
    <img src="img/productimg/gucci.jpg" alt="Photo 6">
    <img src="img/productimg/rice.jpg" alt="Photo 7">
    <img src="img/productimg/walnut.jpg" alt="Photo 8">
  </div>
  </div>
  </div>
  </div>
</section>

<!--photogallery-->
   
         


    
    <!-- Footer Start -->
    <div class="container-fluid " id="footer" data-wow-delay="0.1s" >
        <div class="container" style="background-color:#34AD54;">
            <div class="row gx-5" >
                <div class="col-lg-8 col-md-6" style="color:white; ">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt  me-2" style="color:brown"></i>
                                <p class="mb-0">Head Office, Rajbagh Srinagar</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open me-2" style="color:brown"></i>
                                <p class="mb-0">
                                    jkhpmcltd@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone me-2" style="color:brown"></i>
                                
                                <p class="mb-0">
                                    0194- 2311312 </p>
                            </div>
                           
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Navigations</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right " 
                                    style="color:brown">
                                </i>Home</a>
                                <a class="text-light mb-2" href="aboutus.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>About</a>
                                <a class="text-light mb-2" href="mission.php"><i class="bi bi-arrow-right "style="color:brown">
                                </i>Mission</a>
                                <a class="text-light mb-2" href="objectives.php"><i class="bi bi-arrow-right "style="color:brown">
                                </i>Objectives</a>
                                <a class="text-light" href="activities.php"><i class="bi bi-arrow-right "style="color:brown">
                                </i>Activities</a>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Notifications</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="tenders.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>Tenders</a>
                                <a class="text-light mb-2" href="public.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>Public Notices</a>
                               
                                <a class="text-light mb-2" href="expp.php"><i class="bi bi-arrow-right " style="color:brown">
                                </i>Expression of Interest</a>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Important Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            
                            <a class="text-light mb-2" href="https://jkgad.nic.in/"><i class="bi bi-arrow-right " 
                                style="color:brown">
                            </i>General Administartion Department</a>
                            <a class="text-light mb-2" href="http://www.hortijmu.jk.gov.in/"><i class="bi bi-arrow-right " style="color:brown">
                            </i>Directorate of Horticulture Jammu</a>
                            <a class="text-light mb-2" href="https://hortikashmir.gov.in/"><i class="bi bi-arrow-right "style="color:brown">
                            </i>Directorate of Horticulture Kashmir</a>
                            <a class="text-light mb-2" href="http://jkdhpm.in/index.aspx"><i class="bi bi-arrow-right "style="color:brown">
                            </i>Directorate of Horticulture(P&M) J&K</a>
                            <a class="text-light" href="https://nhb.gov.in/default.aspx"><i class="bi bi-arrow-right "style="color:brown">
                            </i>National Horticulture Board</a>
                        </div>
                    </div>
                    
           
            </div>
        </div>
    </div>
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
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded back-to-top" style="color:red; background-color: yellowgreen;" ><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
</body>

</html>