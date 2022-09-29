<?php
include 'conn.php';


if (isset($_POST['submit'])){
$name = $_POST['name'];
$phone =$_POST['phone'];
$services =$_POST['services'];
$doctors =$_POST['docteur'];



  
  $query = "insert into users (name, phone, service, doctor) values ('$name', '$phone', '$services', '$doctors')";
  
  $resault = mysqli_query($db ,$query);
  print_r ($resault);
  if(!$resault){
    die('impossible d insérer data').mysqli_error($db);
    
  }
}






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hôpital Regionale de Bengardane </title>
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
                <a href="#ftco-appointment" class="btn btn-primary">Prendre rendez-vous</a>
            </div>
            <div class="order-lg-last">
<span>
					    <div class="translate" id="google_translate_element"></div>

                            <script type="text/javascript">
                                function googleTranslateElementInit() {  new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');}
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
					</span>
            </div>
           
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Acceuille</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">cibles</a></li>
                  
                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                    
                    <li class="nav-item"><a href="blog.php" class="nav-link">produits</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                                <h1 class="mb-4">Bienvenue à l'hôpital Regionale de Bengardane</h1>
                                <p>Loin loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles.</p>
                                <p><a href="#appointment" class="btn btn-primary">Prenez rendez-vous</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-end">
                        <div class="col-md-6 ftco-animate">
                            <div class="text w-100">
                                <h1 class="mb-4">Bienvenue à l'hôpital Regionale de Bengardane</h1>
                                <p>La vigilance fait partie de la qualité garantie à l'hôpital.</p>
                                <p><a href="#appointment" class="btn btn-primary">Prenez rendez-vous</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb" id="ftco-appointment">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wrap-appointment d-md-flex">
                        <div class="col-md-8 bg-primary p-5 heading-section heading-section-white">
                            <span class="subheading">Prise de rendez-vous</span>
                            <h2 class="mb-4">Consultation gratuite</h2>
                            <form action="#" method="post" class="appointment" id="appointment">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="services" id="" class="form-control">
			                      	<option value="">Sélectionnez les services</option>
			                        <option value="Manipulation">Manipulation vertébrale</option>
			                        <option value="Electrotherapy">Électrothérapie</option>
			                        <option value="lymphatique ">Manuel Lymphatique</option>
			                        <option value="acupuncture ">Acupuncture médicale</option>
			                        <option value="thérapeutique">Exercice thérapeutique</option>
			                        <option value="Mobilisation">Mobilisation conjointe</option>
			                      </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="docteur" id="" class="form-control">
			                      	<option value="">Sélectionnez docteur</option>
			                        <option value="john">John Doe</option>
			                        <option value="William">William Smith</option>
			                        <option value="Danny">Danny Green</option>
			                        <option value="Jason">Jason Thompson</option>
			                      </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                <input type="datetime" name="time" class="form-control appointment_date" placeholder="Time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="envoyer message" class="btn btn-secondary py-3 px-4">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4 bg-white text-center p-5">
                            <div class="desc border-bottom pb-4">
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
                            <div class="desc pt-4 ">
                                <h3 class="heading">Pour les cas d'urgence</h3>
                                <span class="phone">(+216) 123 456 7890</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section detext-center ftco-animate">
                    <span class="subheading">Nous offrons des services</span>
                    <h2>Nos avantages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-chiropractic"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">La prévention</h3>
                            <p>l'hôpital est le lieu essentiel de détection des problèmes de santé, en particulier par le biais des urgences.</p>
                            <p><a href="services.php" class="btn-custom">Lire la suite</a></p>
                        </div>
                    </div>
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-acupuncture"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">La qualité des soins</h3>
                            <p> l'hôpital met en place un système permettant d'assurer la qualité des dispositifs médicaux répondant à des conditions définies par voie réglementaire..</p>
                            <p><a href="services.php" class="btn-custom">lire la suite</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-electrotherapy"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">Electrotherapy</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                            <p><a href="services.php" class="btn-custom">Read more</a></p>
                        </div>
                    </div>
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-examination"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">cardiologie</h3>
                            <p>est une branche de la médecine qui traite des troubles du cœur ainsi que de certaines parties du système circulatoire</p>
                            <p><a href="services.php" class="btn-custom">lire la suite</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 services ftco-animate">
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-lymph-nodes"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">radiologie</h3>
                            <p> la radiologie conventionnelle, la mammographie, la tomodensitométrie.. et l'échographie</p>
                            <p><a href="services.php" class="btn-custom">lire la suite</a></p>
                        </div>
                    </div>
                    <div class="d-block d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-bone"></span>
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="heading">médecine générale</h3>
                            <p>Les médecins généralistes sont chargés de dispenser des soins globaux et continus à tous ceux qui le souhaitent indépendamment de leur âge, de leur sexe et de leur maladie.</p>
                            <p><a href="services.php" class="btn-custom">lire la suite</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pr-md-5 py-md-5">
                    <div class="row justify-content-start py-5">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">bienvenue à l'Hôpital Regionale de Bengardane </span>
                            <h2 class="mb-4">a propos </h2>
                            <p>Proposez une arborescence pour montrer l’architecture du site telle que vous 
l’imaginez. Celle-ci sera présentée sous forme schématique avec les 
rubriques principales, les sous rubriques et les liens qui les unissent</p>
                        </div>
                    </div>
                    <div class="row ftco-counter pb-5" id="section-counter">
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="45">0</strong>
                                </div>
                                <div class="text">
                                    <span>inscrits club newsletter</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="2342">0</strong>
                                </div>
                                <div class="text">
                                    <span>chiffre d’affaire</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="30">0</strong>
                                </div>
                                <div class="text">
                                    <span>nouveaux prospects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-no-pt ftco-no-pb mt-10">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-1.jpg);">
                        <a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="#">radiologie</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-2.jpg);">
                        <a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="#">Cardiologie</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-3.jpg);">
                        <a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Bactériologie</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-4.jpg);">
                        <a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Anesthésie réanimation</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-5.jpg);">
                        <a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Anatomie et cytologie pathologiques</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-6.jpg);">
                        <a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Chirurgie générale et digestive</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-7.jpg);">
                        <a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="work-single.html">Biochimie.</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="work img d-flex align-items-center" style="background-image: url(images/work-8.jpg);">
                        <a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                        <div class="desc w-100 px-4 text-center pt-5 mt-5">
                            <div class="text w-100 mb-3 mt-4">
                                <h2><a href="#">Centre d'Endoscopie Digestive</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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