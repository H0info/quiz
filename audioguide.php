<!DOCTYPE html>
<html lang="en-US">
    <head>
      <!-- Meta setup -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="">
      <meta name="decription" content="">
      <meta name="author" content="Manik-it">

      <!-- Title -->
      <title>Welcome</title>
  
      <!-- Fav Icon -->
      <link rel="icon" href="images/favicon.ico">
        <!--animate-css-->
        <link rel="stylesheet" href="css/animate.css">
        <!--ziehharmonika-css-->
        <link rel="stylesheet" href="css/ziehharmsonika.css">
        <!--BOOTSTRAP-CSS-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--SOCIAL-ICON-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!--MIN-STYLESHEET-->
        <link rel="stylesheet" href="audioguide.css" >
        <!--RESPONSIVE-CSS-->
        <link rel="stylesheet" href="css/audio-responsive.css" >

        <script src="semantic/dist/semantic.min.js"></script>

    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		

        <!-- header-area-start -->
        <header class="header-area2">
            <div class="customss2">
                <div class="container">
                    <nav>
                        <div class="logo"><img src="images/logo.png" class="img-fluid" alt=""></div>
                        <div class="menu-item">
                            <ul>
                                <li><a href="index.php" class="logos"><img src="images/logo.png" class="img-fluid" alt=""></a></li>
                                <li><a href="quizz.php">Quiz Geolocalisé</a></li>
                                <li><a href="audioguide.php">Audioguides Géolocalisé</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">A propos de  la startup</a></li>
                            </ul>
                        </div>
                        <div class="menu-btn">
                            <ul>
                                <li><a href="login.php">Connexion</a></li>
                                <li><a href="register.php">Inscription</a></li>
                            </ul>
                        </div>
                        <div class="hamburger">
                            <a   data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-sharp fa-solid fa-bars-staggered"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- header-area2-end -->

        <!-- offcanvas-start -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <span class="offcanvas-title" id="offcanvasRightLabel"><img src="images/logo.png" class="img-fluid" alt=""></span>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="mobile-menu-item">
                    <ul>
                        <li><a href="quizz.php">Quiz Geolocalisé</a></li>
                        <li><a href="audioguide.php">Audioguides Géolocalisé</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">A propos de  la startup</a></li>
                    </ul>
                </div>
                <div class="mobile-menu-btn">
                    <ul>
                        <?php
                            if($_SESSION['email']=="")
                            {
                                ?>
                                    <li><a href="login.php">Connexion</a></li>
                                    <li><a href="register.php">Inscription</a></li>
                                <?php
                            } else {
                                if($_SESSION['type']==1) { $ico = "personal_ico.png"; $user_info = $_SESSION['nom'].' '.$_SESSION['prenom']; }
                                else { $ico = "business_ico.png";  $user_info = $_SESSION['company']; }
                                ?>
                                    <li><a href="#" onclick="logout()"><img src="images/logout.png"></a></li>
                                    <li><a href="dashboard.php"><img src="images/<?php echo $ico; ?>"> Bienvenue : <?php echo $user_info ?></a></li>
                                <?php
                            }
                        ?>                    
                    </ul>
                </div>
            </div>
        </div>
        <!-- offcanvas-end-->

        <section class="audioguide-hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-left wow fadeInUp">
                            <span class="tixi1"><img src="images/taxi-icon.png" class="img-fluid" alt=""></span>
                            <span class="tixi3"><img src="images/taxi-icon.png" class="img-fluid" alt=""></span>
                            <h2>Chez LOWXY, nous pensons <br> que vos voyages en europe<br>  <span>devrait être simple, stimulant </span> <br> et récréatif </h2>
                            <div class="hero-text">
                                <p> Et pas juste pour vos yeux mais aussi pour vos oreilles.</p>
                            </div>
                            <div class="bottom-downs">
                                <a href="#">En savoir plus <img src="images/a.png" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-right wow fadeInRight">
                            <img src="images/hero-2.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--audioguide-hero-area-end -->

        <!-- VOYAGE-historique-area-start -->
        <section class="boyage-area">
            <div class="container">
                <div class="new-boysge-container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="boysge-left wow fadeInUp">
                                <h2>VOYAGE</h2>
                                <h2>HISTORIQUE</h2>
                                <h2>DANS LA VILLE</h2>
                                <h2>DE TON CHOIX</h2>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="boysge-right wow fadeInUp">
                                <h3>Nous voulons <br> <span>favoriser la réussite</span><br>de tous nos quiz.</h3>
                                <p>Ce qui nous anime ?<span> Faire que chacun puisse se rapprocher des lieux  visités, simplifier l’insertion culturelle des voyageurs , accompagner les exploits historiques à travers les générations .</span> </p>
                                <p>Au quotidien, nous imaginons et offrons donc les services <span>les plus utiles pour répondre à la curiosités de chacun</span> en offrants des audioguide a disposition pour le maximum de voyageurs en géolocalisant  les monuments les plus proches d’eux.  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- VOYAGE-historique-area-end -->

        <!-- Villes-area-start -->
        <section class="villegs-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-9">
                        <div class="villes-left wow fadeInUp">
                            <div class="villes-left-img-item">
                                <img  src="images/ton1.png" class="img-fluid wow fadeInUp villes-lt" alt="">
                                <span class="villes-md"> <img  src="images/ton2.png" class="img-fluid wow fadeInUp " alt=""></span>
                                <img  src="images/ton3.png" class="img-fluid wow fadeInUp villes-lt" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="villes-right wow fadeInRight">
                            <div class="villes-right-content villes-right1 ">
                                <h2>15</h2>
                                <p>Langues disponibles</p>
                            </div>
                            <div class="villes-right-content villes-right2">
                                <h2>5 Villes</h2>
                                <p>Lancement dans </p>
                            </div>
                            <div class="villes-right-content villes-right3">
                                <h2>50 audioguide</h2>
                                <p>d’une incroyable aventure </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Villes-area-end -->

        <!-- .Nos offres Audioguides area start -->
        <section class="nos-offers-area overflow-hidden">
            <div class="container">
                <div class="nos-custom-container">
                    <div class="nos-bgs"><img src="images/noss.png" alt=""></div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="nos-offers-left">
                                <p><img src="images/right.png" class="img-fluid" alt="">Nos offres Audioguides </p>
                                <h5>Nous travaillons avec passion <br> pour vous offrir <br>
                                    <span>les meilleurs services</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="nos-offers-right">
                                <span class="nos-icom">
                                <img src="images/nos-icons.png" alt="">
                                </span>
                                <img src="images/nous-img.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- .Nos offres Audioguides area end -->

        <!-- price-table-area-start -->
        <section class="price-table-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box-inner wow fadeInLeft">
                            <div class="price-box">
                                <h5>Voyageur</h5>
                                <h2>1,7€</h2>
                                <p>A but personnel non commercial.</p>
                                <ul>
                                    <li><img src="images/chk.png" alt=""> <span>Une ville</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>Toutes les langues</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>mise à jour des audioguides</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>eeeeee</span></li>
                                </ul>
                                <div class="price-btn">
                                    <a href="#">Continuer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box-inner wow fadeInUp">
                            <div class="price-box price-box2">
                                <div class="price-top-btn">
                                    <a href="#">Populaire</a>
                                </div>
                                <h5>Globetrotteur</h5>
                                <h2>8,2€ <span class="pt-month">per user / month</span></h2>
                                <p>A but personnel non commercial.</p>
                                <ul>
                                    <li><img src="images/chk.png" alt=""> <span>Nos villes européens</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>Toutes les langues</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>Mise à jour des audioguides</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>Email support</span></li>
                                </ul>
                                <div class="price-btn">
                                    <a href="#">Continuer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box-inner wow fadeInRight">
                            <div class="price-box price-box3">
                                <h5>Globetrotteur</h5>
                                <h2>28€<span class="pt-month">per user / month</span></h2>
                                <p>A but personnel non commercial.</p>
                                <ul>
                                    <li><img src="images/chk.png" alt=""> <span>Toutes les villes du monde</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>Toutes les langues</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>Mise à jour des audioguides</span></li>
                                    <li><img src="images/chk.png" alt=""> <span>Email support</span></li>
                                </ul>
                                <div class="price-btn">
                                    <a href="#">Continuer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- price-table-area-end -->

        <!-- Envie de venir area start -->
        <section class="evviede-venir-area">
            <div class="container">
                <div class="evviede-venir-wrapper-area wow fadeInUp">
                    <div class="row">
                        <div class="col-md-12 col-lg-3">
                            <div class="evviede-venir-items1">
                                <span class="envie-images1"><img src="images/img1.png" class="img-fluid" alt=""></span>
                                <span class="envie-images2"><img src="images/img2.png" class="img-fluid" alt=""></span>
                                <span class="envie-images3"><img src="images/img3.png" class="img-fluid" alt=""></span>
                                <span class="envie-images4"><img src="images/img4.png" class="img-fluid" alt=""></span>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="evviede-venir-title">
                                <h2>
                                    Envie de venir travailler avec <br>
                                    <span>le sourire chaque matin</span>
                                </h2>
                                <p>Nous recrutons régulièrement de nouveaux talents, n’hésitez <br> pas à consulter les offres disponibles chez LOWXY.</p>
                                <a href="#">Consulter les offres d'emploi</a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-3">
                            <div class="evviede-venir-items1">
                                <span class="envie-images5"><img src="images/img5.png" class="img-fluid" alt=""></span>
                                <span class="envie-images6"><img src="images/img6.png" class="img-fluid" alt=""></span>
                                <span class="envie-images7"><img src="images/img7.png" class="img-fluid" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Envie de venir area end -->

        <!-- footer-area-start -->
        <footer>
            <div class="container">
                <div class="footer-container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="footer-left-item">
                                <img src="images/LOWXY.png" class="img-fluid" alt="">
                                <p>Faire de chaque avenir une <br> réussite.</p>
                                <form action="#">
                                    <span>Langue</span>
                                    <select >
                                        <option value="francais">Francais</option>
                                        <option value="anglais">Anglais</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-menus">
                                <h2>À propos</h2>
                                <ul>
                                    <li><a href="#">CGU</a></li>
                                    <li><a href="#">Mentions légales</a></li>
                                    <li><a href="#">Politique de confidentialité</a></li>
                                    <li><a href="#">Utilisation des cookies</a></li>
                                    <li><a href="#">Gestion des cookies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-menus">
                                <h2>Liens utiles</h2>
                                <ul>
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="#">Geo Quiz</a></li>
                                    <li><a href="#">Audio-Guige Geo</a></li>
                                    <li><a href="#">Support the Start-up</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-footer">
                <div class="moblilef-logos">
                    <div class="m-logos">
                        <img src="images/LOWXY.png" class="img-fluid" alt="">
                        <p>Faire de chaque avenir une <br> réussite.</p>
                    </div>
                    <div class="m-selete">
                        <div class="footer-left-item">
                            <form action="#">
                                <span>Langue</span>
                                <select name="ss" id="ll">
                                    <option value="francais">Francais</option>
                                    <option value="anglais">Anglais</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-faq">
                    <div class="ziehharmonika">
                        <h3>À propos</h3>
                        <div>
                            <div class="footer-menus">
                                <ul>
                                    <li><a href="#">CGU</a></li>
                                    <li><a href="#">Mentions légales</a></li>
                                    <li><a href="#">Politique de confidentialité</a></li>
                                    <li><a href="#">Utilisation des cookies</a></li>
                                    <li><a href="#">Gestion des cookies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ziehharmonika">
                        <h3>Liens utiles</h3>
                        <div>
                            <div class="footer-menus">
                                <ul>
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="#">Geo Quiz</a></li>
                                    <li><a href="#">Audio-Guige Geo</a></li>
                                    <li><a href="#">Support the Start-up</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->
        


        <!--Main-jquery-->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!--wow jQuery animated  -->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script>

            $(document).ready(function() {
                $( window ).scroll(function() {
                    var height = $(window).scrollTop();
                    if(height >= 1) {
                        $('.customss2 ').addClass('fixed-menu2');
                    } else {
                        $('.customss2 ').removeClass('fixed-menu2');
                    }
                });
            });


            function inscription_2 ()
            {
                 let acc_type = $('#acc_type:checked').val();
                 let email = $('#email').val();
                  $.ajax({
                    url : 'inscription_2.php',
                    type : 'POST',
                    data : ({acc_type:acc_type, email:email}),
                    success: function(html) 
                    {
                      $('#inscription_2').html(html);
                      document.getElementById("inscription_1").style="visibility: hidden; opacity: 0; height:0; transition: all 0.5s";
                      document.getElementById("inscription_2").style="visibility: visible; opacity: 100; transition: all 0.5s";
                    }
                  });
            }


        </script>
        <!-- Accordian Script -->
        <script src="js/ziehharmonika.js"></script>
        <!--Bootstrap-js-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!--Custom-js-->
        <script src="js/custom.js"></script>
        <!--Scroll-top	-->
        <a href="#" class="scrolltotop"><i class="fa-solid fa-angle-up"></i></a>
    </body>
</html>
