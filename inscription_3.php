<?php
include "config.php";
r

$type = $_POST['type'];

// Récupération des données GPS de la session
$gps_ip = $_SESSION['ip'];
$gps_city = $_SESSION['city'];
$gps_region = $_SESSION['region'];
$gps_country = $_SESSION['country'];
$gps_loc = $_SESSION['loc'];

$country_code = $_SESSION['countryCode'];
$regionName = $_SESSION['regionName'];
$zip = $_SESSION['zip'];
$isp = $_SESSION['isp'];

// Fonction pour attribuer une valeur aléatoire en fonction du numéro
function assign_rand_value($num) {
    $rand_value = "";
    switch ($num) {
        case 1: $rand_value = "a"; break;
        case 2: $rand_value = "b"; break;
        // ... Autres cas pour les valeurs de 3 à 36 ...
        case 36: $rand_value = "9"; break;
    }
    return $rand_value;
}

// Fonction pour générer une chaîne alphanumérique aléatoire
function get_rand_alphanumeric($length) {
    $rand_id = "";
    if ($length > 0) {
        for ($i = 1; $i <= $length; $i++) {
            mt_srand((double) microtime() * 1000000);
            $num = mt_rand(1, 36);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}

if ($type == 1) {
    // Traitement de l'inscription personnelle
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    $ville = $_POST['ville'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification si l'adresse e-mail existe déjà dans la base de données
    $sql_email = $conn->query("SELECT * FROM personal WHERE email = '$email'");
    $num_email = $sql_email->num_rows;

    if ($num_email == 0) {
        // L'adresse e-mail n'existe pas, insertion des données dans la table 'personal'
        $conn->query("INSERT INTO personal 
            (email, password, nom, prenom, date, town, tel, ip, gps_city, gps_region, gps_country, gps_loc, gps_countrycode, gps_regionname, gps_zip, gps_isp) 
            VALUES 
            ('$email', '$password', '$nom', '$prenom', '$date', '$ville', '$tel', '$gps_ip', '$gps_city', '$gps_region', '$gps_country', '$gps_loc', '$country_code', '$regionName', '$zip', '$isp')");

        // Affichage du message de réussite
        ?>
        <img src="images/success.png" style="padding: 20px" />
        <h2>Votre inscription a été validée.</h2>
        <p>Vous pouvez faire des achats sur notre site et jouer au quiz pour gagner des courses de taxi gratuites.</p>
        <div class="evviede-venir-title" style="margin: 20px;">
            <a href="quizz.php">Cliquez ici pour commencer.</a> 
        </div>
        <?php
    } else {
        // L'adresse e-mail existe déjà, affichage du message d'erreur
        ?>
        <img src="images/error.png" style="padding: 20px" />
        <h2>Votre inscription n'a pas été validée.</h2>
        <p>L'adresse e-mail existe déjà.</p>
        <div class="evviede-venir-title" style="margin: 20px;">
            <a href="register.php">Cliquez ici pour réessayer.</a> 
        </div>
        <?php
    }
} else {
    // Traitement de l'inscription professionnelle
    $company = $_POST['company'];
    $owner  = $_POST['owner'];
    $industry = $_POST['industry'];
    $town = $_POST['town'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification si l'adresse e-mail existe déjà dans la base de données
    $sql_email = $conn->query("SELECT * FROM business WHERE email = '$email'");
    $num_email = $sql_email->num_rows;

    if ($num_email == 0) {
        // L'adresse e-mail n'existe pas, insertion des données dans la table 'business'
        $matricule = get_rand_alphanumeric(5);
        $matricule = strtoupper($matricule);
        $conn->query("INSERT INTO business
            (company, owner, town, industry, address, tel, email, password, matricule, ip, gps_city, gps_region, gps_country, gps_loc, gps_countrycode, gps_regionname, gps_zip, gps_isp) 
            VALUES 
            ('$company', '$owner', '$town', '$industry', '$address', '$tel', '$email', '$password', '$matricule', '$gps_ip', '$gps_city', '$gps_region', '$gps_country', '$gps_loc', '$country_code', '$regionName', '$zip', '$isp')");
        
        // Récupération du matricule nouvellement généré
        $sql_matricule = $conn->query("SELECT matricule FROM business WHERE email = '$email'");
        $row_matricule = $sql_matricule->fetch_assoc();

        // Affichage du message de réussite avec le matricule
        ?>
        <img src="images/success.png" style="padding: 20px" />
        <h2>Votre inscription a été validée.</h2>
        <p>Vous pouvez commencer à travailler dès maintenant.</p>
        <h2>Votre matricule de Taxi</h2>
        <h1>
            <span style="letter-spacing: 10px;font-size: 60px;font-family: monospace; background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 8%, #07FFD2 8%, #07FFD2 66%, rgba(255, 255, 255, 0) 66%);">
            <?php echo $row_matricule['matricule']; ?>
            </span>
        </h1>
        <div class="evviede-venir-title" style="margin: 20px;">
            <a href="dashboard.php">Tableau de bord</a> 
        </div>
        <?php
    } else {
        // L'adresse e-mail existe déjà, affichage du message d'erreur
        ?>
        <img src="images/error.png" style="padding: 20px" />
        <h2>Votre inscription n'a pas été validée.</h2>
        <p>L'adresse e-mail existe déjà.</p>
        <div class="evviede-venir-title" style="margin: 20px;">
            <a href="register.php">Cliquez ici pour réessayer.</a> 
        </div>
        <?php
    }
}
?>
