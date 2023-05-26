  <?php

include "config.php";

$pub = $_POST['pub'];
$feedback = $_POST['feedback'];
$user = $_POST['user'];

$gps_ip = $_SESSION['ip'];
$gps_city = $_SESSION['city'];
$gps_region = $_SESSION['region'];
$gps_country = $_SESSION['country'];
$gps_loc = $_SESSION['loc'];


$country_code = $_SESSION['countryCode'];
$regionName = $_SESSION['regionName'];
$zip = $_SESSION['zip'];
$isp = $_SESSION['isp'];





$date = date("d-m-Y");
$time = date("H:i");


$conn->query("INSERT INTO ads_feedback (pub, feedback, user, ip, gps_city, gps_region, gps_country, gps_loc, gps_countrycode, gps_regionname, gps_zip, gps_isp, `date`, `time`) VALUES ('$pub', '$feedback', '$user', '$ip', '$gps_city', '$gps_region', '$gps_country', '$gps_loc', '$country_code', '$regionName', '$zip', '$isp', '$date', '$time')");

?>

<br>

        <p>
            Merci pour votre réponse.
        </p>
        <p>
            <img src="images/success.png" width="48px" />
        </p>