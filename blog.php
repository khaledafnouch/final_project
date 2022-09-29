<?php 
require 'conn.php';


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo _('Hôpital Regionale de Bengardane');   ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
                    <a class="navbar-brand" href="index.php">Hôpital Regionale</a>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-8 mb-md-0 mb-3">
                            <div class="top-wrap d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                                <div class="text"><span>Address</span><span>198 Bengardane, mednine tn 10016</span></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="top-wrap d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-phone"></span></div>
                                <div class="text"><span>tel</span><span>(+216) 123 456 7890</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
            <div class="order-lg-last">
                <a href="#appointment" class="btn btn-primary">Prendre rendez-vous</a>
            </div>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">Acceuille</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">cibles</a></li>
                    
                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                    
                    <li class="nav-item active" ><a href="blog.php" class="nav-link">produits</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Acceuille <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">produits</h1>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
    <?php
        $sql = "select * from produits ";
        $res = $db->query($sql);
        
        if ($res->num_rows > 0)
        {
        
        foreach($res as $row){
        
            $id_produit = $row['id'];
            $img_produit =$row['image'];
            $name_produit = $row['name'];
            $date_produit = $row['date'];
        
        ?>
      <div class="container my-produit ">
        
        <div class="row ">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry ">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo $img_produit ?>');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		
              		<div class="desc pl-3">
              			<span><?php echo $name_produit ?></span>
              			<span><?php echo $date_produit ?></span>
              		</div>
              	</div>
                 <p><a href="#" class="btn btn-primary">ajouter au panier</a></p>
              </div>
            </div>
          </div>
          
        </div>
      
      </div>
      <?php 
        }
        
      }
      ?>
    </section>

    <footer class="footer ftco-section ftco-no-pt">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget py-4 py-md-5">
                        <h2 class="logo"><a href="#">Hôpital Regionale de Bengardane</a></h2>
                        <p>ses activités principales Santé Publique
– ses produits et services vendus ;
Prestation de service sanitaire Preventive (1ère ligne) + Curative (2ème
ligne)</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget ml-md-5 py-5">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>service sanitaire</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span> Preventive</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Curative </a></li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Acupuncture médicale</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Exercice thérapeutique</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget py-4 py-md-5">
                        <h2 class="ftco-heading-2">Informations de contact</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">203 bengerdene, mednine, tunisie</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+216 392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget bg-primary p-4 py-5">
                    <h2>Heures de travail</h2>
                                <div class="opening-hours">
                                    <h4>Jours d'ouverture:</h4>
                                    <p class="pl-3">
                                        <span><strong>Lundi -- vendredi:</strong> 9am to 20 pm</span>
                                        <span><strong>Samedi :</strong> 9am to 17 pm</span>
                                    </p>
                                    <h4>Vacances:</h4>
                                    <p class="pl-3">
                                        <span>Tous les dimanches</span>
                                        <span>Tous les jours fériés officiels</span>
                                    </p>
                                </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="text-center text-md-end text-xl-start">
                        All Rights Reserved designed and developped by <span>khaled afnouch</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>