<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <meta charset="UTF-8">
    <?php include "config.php"; ?>
    <!-- Configuration Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="lowxy">

    <!-- Titre -->
    <title>LOWXY - Quiz Géolocalisé</title>

    <!-- Fav Icon -->
    <link rel="icon" href="images/favicon.ico">
    <!-- animate-css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- ziehharmonika-css -->
    <link rel="stylesheet" href="css/ziehharmsonika.css">
    <!-- BOOTSTRAP-CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- SOCIAL-ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- MIN-STYLESHEET -->
    <link rel="stylesheet" href="audioguide.css">
    <!-- RESPONSIVE-CSS -->
    <link rel="stylesheet" href="css/audio-responsive.css">

    <!-- Protection contre les attaques CSRF -->
    <script>
        function getCookie(name) {
            var cookieArr = document.cookie.split(";");

            for (var i = 0; i < cookieArr.length; i++) {
                var cookiePair = cookieArr[i].split("=");

                if (name === cookiePair[0].trim()) {
                    return decodeURIComponent(cookiePair[1]);
                }
            }

            return null;
        }

        function setCSRFToken() {
            var csrfToken = getCookie("csrfToken");

            if (csrfToken) {
                var forms = document.getElementsByTagName("form");

                for (var i = 0; i < forms.length; i++) {
                    forms[i].insertAdjacentHTML("beforeend", '<input type="hidden" name="csrfToken" value="' + csrfToken + '">');
                }
            }
        }
    </script>

    <style>
        /* Styles pour la réactivité */
        /* Ajoutez vos styles personnalisés ici */
    </style>
</head>
<body style="width: 99%">
<!--[if lte IE 9]>
<p class="browserupgrade">Vous utilisez un navigateur <strong>obsolète</strong>. Veuillez <a href="https://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre expérience et votre sécurité.</p>
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
                        <li><a href="quizz.php">Quiz Géolocalisé</a></li>
                        <li><a href="audioguide.php">Audioguides Géolocalisés</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">À propos de la startup</a></li>
                    </ul>
                </div>
                <div class="menu-btn">
                    <ul>
                        <?php
                        if ($_SESSION['email'] == "") {
                            ?>
                            <li><a href="login.php">Connexion</a></li>
                            <li><a href="register.php">Inscription</a></li>
                            <?php
                        } else {
                            if ($_SESSION['type'] == 1) {
                                $ico = "personal_ico.png";
                                $user_info = $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
                            } else {
                                $ico = "business_ico.png";
                                $user_info = $_SESSION['company'];
                            }
                            ?>
                            <li><a href="#" onclick="logout()"><img src="images/logout.png"></a></li>
                            <li><a href="dashboard.php"><img src="images/<?php echo $ico; ?>"> Bienvenue : <?php echo $user_info ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="hamburger">
                    <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-sharp fa-solid fa-bars-staggered"></i></a>
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
                <li><a href="quizz.php">Quiz Géolocalisé</a></li>
                <li><a href="audioguide.php">Audioguides Géolocalisés</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">À propos de la startup</a></li>
            </ul>
        </div>
        <div class="mobile-menu-btn">
            <ul>
                <?php
                if ($_SESSION['email'] == "") {
                    ?>
                    <li><a href="login.php">Connexion</a></li>
                    <li><a href="register.php">Inscription</a></li>
                    <?php
                } else {
                    if ($_SESSION['type'] == 1) {
                        $ico = "personal_ico.png";
                        $user_info = $_SESSION['nom'] . ' ' . $_SESSION['prenom'];
                    } else {
                        $ico = "business_ico.png";
                        $user_info = $_SESSION['company'];
                    }
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
<?php
if ($_SESSION['email'] == "") {
    $user_info = "Invité";
}
?>
<input id="user" value="<?php echo $user_info ?>" hidden>

<!-- Scripts JavaScript -->
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    // Fonction pour la déconnexion sécurisée
    function logout() {
        var csrfToken = getCookie("csrfToken");

        if (csrfToken) {
            fetch("logout.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: "csrfToken=" + encodeURIComponent(csrfToken)
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    window.location.href = "login.php";
                }
            })
            .catch(function(error) {
                console.error("Une erreur s'est produite lors de la déconnexion :", error);
            });
        }
    }

    // Appel de la fonction pour ajouter le jeton CSRF aux formulaires
    setCSRFToken();
</script>

</body>
</html>
