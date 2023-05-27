<!DOCTYPE html>
<html lang="fr">
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
                                <li><a href="#">À propos de la startup</a></li>
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

        <!-- Content here -->
        <section class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>À propos de nous</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt gravida eros. Fusce fermentum risus in mi sollicitudin, at vestibulum mauris tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam dapibus efficitur ante, vel ultrices felis fermentum id. Donec non neque a elit eleifend faucibus. Donec iaculis ante ut tortor rhoncus dapibus.</p>
                        <p>Donec dignissim malesuada nisl a efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis a lacus eget lectus condimentum efficitur et sed leo. Sed ultricies odio vitae vestibulum posuere. Aliquam aliquam aliquam vestibulum. Proin ut dapibus nisl. Praesent id nunc a ex luctus eleifend vitae id ex. In hac habitasse platea dictumst. Cras tristique mauris id velit pulvinar tincidunt.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="buy-me-a-coffee">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
                <h3>Soutenez la startup</h3>
                <p>Nous apprécions votre soutien pour continuer à développer notre startup. Si vous aimez notre travail, vous pouvez nous offrir un café !</p>
                <a href="https://www.buymeacoffee.com/votrelien" target="_blank"><img src="chemin/vers/votre/image.png" alt="Buy Me a Coffee"></a>
            </div>
            </div>
            </div>
        </section>
        <!-- Content here -->

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
                        <li><a href="#">À propos de la startup</a></li>
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

        <!-- footer-area-start -->
        <footer>
            <div class="container">
                <div class="footer-container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="footer-left-item">
                                <img src="images/LOWXY.png" class="img-fluid" alt="">
                                <p>Faire de chaque avenir une réussite.</p>
                                <form action="#">
                                    <span>Langue</span>
                                    <select >
                                        <option value="francais">Français</option>
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
                                    <li><a href="#">Quiz Géolocalisé</a></li>
                                    <li><a href="#">Audioguides Géolocalisé</a></li>
                                    <li><a href="#">Soutenir la start-up</a></li>
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
                        <p>Faire de chaque avenir une réussite.</p>
                    </div>
                    <div class="m-selete">
                        <div class="footer-left-item">
                            <form action="#">
                                <span>Langue</span>
                                <select name="ss" id="ll">
                                    <option value="francais">Français</option>
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
                                    <li><a href="#">Quiz Géolocalisé</a></li>
                                    <li><a href="#">Audioguides Géolocalisé</a></li>
                                    <li><a href="#">Soutenir la start-up</a></li>
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
