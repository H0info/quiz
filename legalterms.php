<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "config.php"; ?>

            <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            $to = 'admin@lowxy.fr';
            $subject = 'Nouveau message de contact';
            $headers = "From: $name <$email>";
            
            if (mail($to, $subject, $message, $headers)) {
        echo 'Votre message a été envoyé avec succès.';
    } else {
        echo 'Une erreur s\'est produite lors de l\'envoi du message.';
    }
    }
    ?>      
        <!-- Configuration de la méta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="Manik-it">
        <title>Contactez-nous</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            height: 120px;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
	
		<!-- Titre -->
		<title>LOWXY - Quiz Géolocalisé</title>
    
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
            <p class="browserupgrade">Vous utilisez un navigateur <strong>obsolète</strong>. Veuillez <a href="https://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre expérience et votre sécurité.</p>
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
                                <li><a href="quizz.php">Quiz Géolocalisé</a></li>
                                <li><a href="audioguide.php">Audioguides Géolocalisés</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="about-us.php">À propos de la startup</a></li>
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

    <div class="container">
        <h2>Mentions Légales</h2>
        <ul>
            <li><strong>Le Site Lowxy.fr est édité par Lowxy</strong></li>
            <li><strong>Forme sociale :</strong> SAS au capital de 100,00 euros</li>
            <li><strong>Immatriculation au registre du commerce et des sociétés :</strong> Paris – 918912304</li>
            <li><strong>Numéro de TVA intracommunautaire :</strong> FR28918912304</li>
            <li><strong>Siège social :</strong> 158 rue de Saussure 75017 Paris</li>
            <li><strong>Directeur de la publication :</strong> Hocine Larbi</li>
            <li><strong>Contact :</strong> 07 66 14 52 37 - info@lowxy.fr</li>
            <li><strong>Hébergeur du Site :</strong> Google Cloud et MongoDB</li>
            <li><strong>Localisation de l’hébergement des données du Site :</strong> Europe</li>
        </ul>
    </div>

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
                                    <select>
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
                                    <li><a href="cgu.php">CGU</a></li>
                                    <li><a href="legalterms.php">Mentions légales</a></li>
                                    <li><a href="cookiepolicy.php">Politique de confidentialité</a></li>
                                    <li><a href="cookiepolicy.php">Utilisation des cookies</a></li>
                                    <li><a href="cookiepolicy.php">Gestion des cookies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-menus">
                                <h2>Liens utiles</h2>
                                <ul>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li><a href="quizz.php">Quiz Géolocalisé</a></li>
                                    <li><a href="audioguide.php">Audioguides Géolocalisés</a></li>
                                    <li><a href="about-us">Soutenir la startup</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact-us.php">Nous contacter</a></li>
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
                                    <li><a href="cgu.php">CGU</a></li>
                                    <li><a href="legalterms.php">Mentions légales</a></li>
                                    <li><a href="cookiepolicy.php">Politique de confidentialité</a></li>
                                    <li><a href="cookiepolicy.php">Utilisation des cookies</a></li>
                                    <li><a href="cookiepolicy.php">Gestion des cookies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ziehharmonika">
                        <h3>Liens utiles</h3>
                        <div>
                            <div class="footer-menus">
                                <ul>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li><a href="quizz.php">Quiz Géolocalisé</a></li>
                                    <li><a href="audioguide.php">Audioguides Géolocalisés</a></li>
                                    <li><a href="about-us.php">Soutenir la startup</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact-us.php">Nous contacter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

        <!-- Scripts -->

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
