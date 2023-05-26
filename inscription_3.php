<?php

include "config.php";

$type = $_POST['type'];


	$gps_ip = $_SESSION['ip'];
    $gps_city = $_SESSION['city'];
    $gps_region = $_SESSION['region'];
    $gps_country = $_SESSION['country'];
    $gps_loc = $_SESSION['loc'];

    $country_code = $_SESSION['countryCode'];
	$regionName = $_SESSION['regionName'];
	$zip = $_SESSION['zip'];
	$isp = $_SESSION['isp'];


    function assign_rand_value($num) {

    // accepts 1 - 36
    switch($num) {
        case "1"  : $rand_value = "a"; break;
        case "2"  : $rand_value = "b"; break;
        case "3"  : $rand_value = "c"; break;
        case "4"  : $rand_value = "d"; break;
        case "5"  : $rand_value = "e"; break;
        case "6"  : $rand_value = "f"; break;
        case "7"  : $rand_value = "g"; break;
        case "8"  : $rand_value = "h"; break;
        case "9"  : $rand_value = "i"; break;
        case "10" : $rand_value = "j"; break;
        case "11" : $rand_value = "k"; break;
        case "12" : $rand_value = "l"; break;
        case "13" : $rand_value = "m"; break;
        case "14" : $rand_value = "n"; break;
        case "15" : $rand_value = "o"; break;
        case "16" : $rand_value = "p"; break;
        case "17" : $rand_value = "q"; break;
        case "18" : $rand_value = "r"; break;
        case "19" : $rand_value = "s"; break;
        case "20" : $rand_value = "t"; break;
        case "21" : $rand_value = "u"; break;
        case "22" : $rand_value = "v"; break;
        case "23" : $rand_value = "w"; break;
        case "24" : $rand_value = "x"; break;
        case "25" : $rand_value = "y"; break;
        case "26" : $rand_value = "z"; break;
        case "27" : $rand_value = "0"; break;
        case "28" : $rand_value = "1"; break;
        case "29" : $rand_value = "2"; break;
        case "30" : $rand_value = "3"; break;
        case "31" : $rand_value = "4"; break;
        case "32" : $rand_value = "5"; break;
        case "33" : $rand_value = "6"; break;
        case "34" : $rand_value = "7"; break;
        case "35" : $rand_value = "8"; break;
        case "36" : $rand_value = "9"; break;
    }
    return $rand_value;
}

function get_rand_alphanumeric($length) {
    if ($length>0) {
        $rand_id="";
        for ($i=1; $i<=$length; $i++) {
            mt_srand((double)microtime() * 1000000);
            $num = mt_rand(1,36);
            $rand_id .= assign_rand_value($num);
        }
    }
    return $rand_id;
}

if($type == 1)
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date = $_POST['date'];
	$town = $_POST['ville'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$password = $_POST['password'];



	$sql_email = $conn->query("SELECT * FROM personal WHERE email = '$email'");
	$num_email = $sql_email->num_rows;

	if($num_email == 0) 
		{
			$conn->query("INSERT INTO personal 
				(email, password, nom, prenom, date, town, tel, ip, gps_city, gps_region, gps_country, gps_loc, gps_countrycode, gps_regionname, gps_zip, gps_isp) VALUES 
				('$email', '$password', '$nom', '$prenom', '$date', '$town', '$tel', '$ip', '$gps_city', '$gps_region', '$gps_country', '$gps_loc', '$country_code', '$regionName', '$zip', '$isp')");

			?>
				<img src="images/success.png" style="padding: 20px" />
				<h2>Votre inscription a été validée.</h2>
				<p>Vous pouvez faire des achats sur notre site et jouer le quizz pour course de taxi gratuites.</p>
				<div class="evviede-venir-title" style="margin: 20px;">
                    <a href="quizz.php">Cliquer ici pour commencer.</a> 
                </div>
			<?php
		}
	else {
			?>
				<img src="images/error.png" style="padding: 20px" />
				<h2>Votre inscription n'a pas été validée.</h2>
				<p>Adresse e-mail existe déjà.</p>
				<div class="evviede-venir-title" style="margin: 20px;">
                    <a href="register.php">Cliquer ici pour réessayer.</a> 
                </div>
			<?php
		}

} else {
	$company = $_POST['company'];
	$owner  = $_POST['owner'];
	$industry = $_POST['industry'];
	$town = $_POST['town'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql_email = $conn->query("SELECT * FROM business WHERE email = '$email'");
	$num_email = $sql_email->num_rows;


	if($num_email == 0) 
		{
			$matricule = get_rand_alphanumeric(5);
			$matricule = strtoupper($matricule);
			$conn->query("INSERT INTO business
				(company, owner, town, industry, address, tel, email, password, matricule, ip, gps_city, gps_region, gps_country, gps_loc, gps_countrycode, gps_regionname, gps_zip, gps_isp) VALUES 
				('$company', '$owner', '$town', '$industry', '$address', '$tel', '$email', '$password', '$matricule', '$ip', '$gps_city', '$gps_region', '$gps_country', '$gps_loc', '$country_code', '$regionName', '$zip', '$isp')");
			$sql_matricule = $conn->query("SELECT matricule FROM business WHERE email = '$email'");
			$row_matricule = $sql_matricule->fetch_assoc();
			?>
				<img src="images/success.png" style="padding: 20px" />
				<h2>Votre inscription a été validée.</h2>
				<p>Vous pouvez commencer a travailler dés maintenant.</p>
				<h2>Votre matricule de Taxi</h2>
				<h1>
					<span style="letter-spacing: 10px;font-size: 60px;font-family: monospace; background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 8%, #07FFD2 8%, #07FFD2 66%, rgba(255, 255, 255, 0) 66%);">
					<?php echo $row_matricule['matricule']; ?>
					</span>
				</h1>
				<div class="evviede-venir-title" style="margin: 20px;">
                    <a href="dashboard.php">Tableau de bors</a> 
                </div>
			<?php
		}
	else {
			?>
				<img src="images/error.png" style="padding: 20px" />
				<h2>Votre inscription n'a pas été validée.</h2>
				<p>Adresse e-mail existe déjà.</p>
				<div class="evviede-venir-title" style="margin: 20px;">
                    <a href="register.php">Cliquer ici pour réessayer.</a> 
                </div>
			<?php
		}
}

?>
