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

        h1 {
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

    <div class="container">
        <h1>Politique des cookies</h1>
        <!-- Ajoutez ici le contenu de la politique de confidentialité -->
        <p>POLITIQUE DE CONFIDENTIALITÉ</p>
        <p>Introduction</p>
        <p>La société Lowxy, soucieuse des droits des individus, notamment au regard des traitements automatisés et dans une volonté de transparence avec ses clients, a mis en place une politique reprenant l’ensemble de ces traitements, des finalités poursuivies par ces derniers ainsi que des moyens d’actions à la disposition des individus afin qu’ils puissent au mieux exercer leurs droits.</p>
        <p>Pour toute information complémentaire sur la protection des données personnelles, nous vous invitons à consulter le site : <a href="https://www.cnil.fr/">https://www.cnil.fr/</a></p>
        <p>Comment contacter notre délégué à la protection des données ?</p>
        <p>Un délégué à la protection des données : Frederic Blond, FBd@lowxy.Fr, est à votre disposition pour toute question relative à la protection de vos données personnelles.</p>
        <p>Article 2 - Quelles sont les données collectées par lowxy ?</p>
        <p>Vos données sont collectées par la société Lowxy.</p>
        <p>Une donnée à caractère personnel désigne toute information concernant une personne physique identifiée ou identifiable (personne concernée) ; est réputée identifiable une personne qui peut être identifiée, directement ou indirectement, notamment par référence à un nom, un numéro d'identification ou à un ou plusieurs éléments spécifiques, propres à son identité physique, physiologique, génétique, psychique, économique, culturelle ou sociale.</p>
        <p>Les informations personnelles pouvant être recueillies sur le site sont principalement utilisées par Lowxy pour la gestion des relations avec vous, et le cas échéant pour le traitement de vos commandes.</p>
        <p>Les données personnelles collectées sont les suivantes :</p>
        <ul>
            <li>nom et prénom</li>
            <li>adresse</li>
            <li>adresse mail</li>
            <li>numéro de téléphone</li>
            <li>données financières : dans le cadre du paiement des produits et prestations proposés sur la Plateforme, celle-ci enregistre des données financières relatives à la carte de crédit de l'utilisateur.</li>
        </ul>
        <p>Quels cookies utilisons-nous ?</p>
        <p>Qu’est-ce qu’un « cookie » ?</p>
        <p>Un « Cookie » ou traceur est un fichier électronique déposé sur un terminal (ordinateur, tablette, smartphone,…) et lu par exemple lors de la consultation d'un site internet, de la lecture d'un courrier électronique, de l'installation ou de l'utilisation d'un logiciel ou d'une application mobile et ce, quel que soit le type de terminal utilisé (source : <a href="https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi">https://www.cnil.fr/fr/cookies-traceurs-que-dit-la-loi</a>).</p>
        <p>Le site peut collecter automatiquement des informations standards. Toutes les informations collectées indirectement ne seront utilisées que pour suivre le volume, le type et la configuration du trafic utilisant ce site, pour en développer la conception et l'agencement et à d'autres fins administratives et de planification et plus généralement pour améliorer le service que nous vous offrons.</p>
        <p>Le cas échéant, des « cookies » émanant de l'éditeur du site et/ou des sociétés tiers pourront être déposés sur votre terminal, avec votre consentement. Dans ce cas, lors de la première navigation sur ce site, une bannière explicative sur l’utilisation des « cookies » apparaît. Avant de poursuivre la navigation, le client et/ou le prospect doit accepter ou refuser l’utilisation desdits « cookies ». L'utilisateur a la possibilité de désactiver les cookies à tout moment.</p>
        <p>Les cookies suivants sont lus et déposés à partir de lowxy.fr :</p>
        <ul>
            <li>Cookies Google :</li>
            <ul>
                <li>Google analytics : permet de mesurer l'audience du site ;</li>
                <li>Google tag manager : facilite l’implémentation des tags sur les pages et permet de gérer les balises Google ;</li>
                <li>Google Adsense : régie publicitaire de Google utilisant les sites web ou les vidéos YouTube comme support pour ses annonces ;</li>
                <li>Google Dynamic Remarketing : permet de vous proposer de la publicité dynamique en fonction des précédentes recherches ;</li>
                <li>Google Adwords Conversion : outil de suivi des campagnes publicitaires adwords ;</li>
                <li>DoubleClick : cookies publicitaires de Google pour diffuser des bannières.</li>
            </ul>
            <li>Cookies Facebook :</li>
            <ul>
                <li>Facebook connect : permet de s'identifier à l'aide de son compte Facebook ;</li>
                <li>Facebook social plugins : permet de liker, partager, commenter du contenu avec un compte Facebook ;</li>
                <li>Facebook Custom Audience : permet d'interagir avec l'audience sur Facebook.</li>
            </ul>
        </ul>

        <!-- Ajoutez ici le contenu supplémentaire de votre politique des cookies, selon vos besoins -->

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
                                    <li><a href="#">Audioguides Géolocalisés</a></li>
                                    <li><a href="#">Soutenir la startup</a></li>
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
                                    <li><a href="#">Audioguides Géolocalisés</a></li>
                                    <li><a href="#">Soutenir la startup</a></li>
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
