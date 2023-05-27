<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php include "config.php"; ?>
        <!-- Meta setup -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="decription" content="">
        <meta name="author" content="Manik-it">
	
		<!-- Title -->
		<title>LOWXY - Quiz Geolocalisé</title>
    
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
        <link rel="stylesheet" href="style.css" >
        <!--RESPONSIVE-CSS-->
        <link rel="stylesheet" href="css/responsive.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		

        <!-- header-area-start -->
        <header class="header-area">
            <div class="customss">
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
                        <div class="hamburger">
                            <a   data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-sharp fa-solid fa-bars-staggered"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- header-area-end -->

        <?php
        if($_SESSION['type']==2)
        {
            ?>

                                        <div class="col-md-12 col-lg-6" style="padding: 50px; text-align: center; width: 100%">
                                            <div class="evviede-venir-title">
                                                <h2>Votre matricule de Taxi</h2>
                                                <h2><span style="letter-spacing: 10px;font-size: 60px;font-family: monospace;"><?php echo $_SESSION['matricule']; ?></span></h2>
                                                <a href="dashboard.php">Tableau de bords</a>
                                            </div>
                                        </div>

            <?php
        }
        ?>

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

        <!-- hero-area-start -->
        <section class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-left wow fadeInUp">
                            <span class="tixi1"><img src="images/taxi-icon.png" class="img-fluid" alt=""></span>
                            <span class="tixi2"><img src="images/taxi-icon.png" class="img-fluid" alt=""></span>
                            <span class="tixi3"><img src="images/taxi-icon.png" class="img-fluid" alt=""></span>
                            <h2>Le Géo-Quiz sur ta <br> ville qui paie ton <br> <span>trajet de taxi</span> </h2>
                            <div class="hero-text">
                                <small><img src="images/right.png" alt=""></small>
                                <p><span>Lowxy</span> t’offre toutes les 10 min ton trajet en <br> taxi , et pour rendre l’expérience encore plus <br> interactive et agréable, à chaque gain de 
                                    <br> course un arbre sera planter !
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-right">
                            <img src="images/herro-left-img.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area-end -->

        <!-- flag-area-start -->
        <div class="flag-area">
            <div class="container">
                <div class="flag-wrapper wow fadeInUp">
                    <div class="flag-item">
                        <ul>
                            <li>PARIS</li>
                            <li><img src="images/flag1.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="flag-item">
                        <ul>
                            <li>BARCELONE</li>
                            <li><img src="images/flag2.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="flag-item">
                        <ul>
                            <li>AMSTERDAM</li>
                            <li><img src="images/flag3.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="flag-item">
                        <ul>
                            <li>BERLIN</li>
                            <li><img src="images/flag4.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="flag-item">
                        <ul>
                            <li>ROME</li>
                            <li><img src="images/flag5.png" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- flag-area-end -->

        <!-- millions de area start -->
        <section class="milions-de-area overflow-hidden">
            <div class="container">
                <div class="milions-title">
                    <h3><span>35 millions de 16-55 ans</span> <br>utiliseront nos services en Europe</h3>
                </div>
                <div class="milions-de-wrapper">
                    <span class="ml-lf-bg">
                    <img src="images/millions-bg.png" alt="">
                    </span>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 orderss2">
                            <div class="millions-de-left">
                                <div class="millions-de-left-img">
                                    <img src="images/m-img.png" class="img-fluid" alt="">
                                    <div class="millions-de-text-item-wrappers wow fadeInUp">
                                        <div class="millions-de-text-item wow fadeInUp">
                                            <ul>
                                                <li><span>Montant total</span> </li>
                                                <li>aides pour  aujourd’hui</li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <h4>34.34€</h4>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="millions-de-text-item1 wow ">
                                            <ul>
                                                <li><span>Qui a construit la statut de la liberté ?</span> </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <h4>34.34€</h4>
                                                </li>
                                                <li>  22/08/2022 à Paris</li>
                                            </ul>
                                        </div>
                                        <div class="millions-de-text-item1">
                                            <ul>
                                                <li><span>Quel est le monument le plus visiter en europe ?</span> </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <h4>14.812€</h4>
                                                </li>
                                                <li>  03/02/2022 à Rome</li>
                                            </ul>
                                        </div>
                                        <div class="millions-de-text-item1">
                                            <ul>
                                                <li><span>Le batiment religieux le plus connu d’europe ?</span> </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <h4>70€</h4>
                                                </li>
                                                <li>            02/03/2022 à Berlin</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 orderss1">
                            <div class="millions-de-right">
                                <h3>Soyez sûr d'obtenir <br> les même chances <br> de gagner à chaque <br> fois.</h3>
                                <ul>
                                    <li><span>Tentez</span> en 5 minutes notre quiz</li>
                                    <li><span>Historique</span> de vos gains <span>dans votre profil</span></li>
                                    <li><span>Ecoutez</span> nos audios guides<span> avant de vous lancer</span></li>
                                </ul>
                                <a href="audioguide.php">Je découvre les audios guides</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="drive-text-area">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="drive-text-left wow fadeInUp">
                                <img src="images/exc.png" alt="">
                                <h3>Comment jouer à notre Quiz ?</h3>
                                <ul>
                                    <li>Entres ta réponse dans la case </li>
                                    <li>Choisis ta bannières préférer parmi <span>les 3 choix disponibles</span></li>
                                    <li><span>Et tu seras directement rediriger , </span>vers la question <br>   suivante</li>
                                </ul>
                                <a href="quizz.php">Je teste mes connaissances</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="drive-right-img wow fadeInUp">
                                <span class="comm-car"><img src="images/taxi-icon.png" alt=""></span>
                                <img src="images/imagesll.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- millions de area end -->   

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
                        $('.customss ').addClass('fixed-menu');
                    } else {
                        $('.customss ').removeClass('fixed-menu');
                    }
                });
            });
            function logout()
            {
                $.ajax({
                    url : 'logout.php',
                    type : 'POST',
                  });
                location.reload();
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
