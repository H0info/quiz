<?php
session_start();

$servername = "localhost";
$username = "utdtdnmy_WPLVM";
$password = "Tx36>(J$7bZIcB}}F";
$dbname = "utdtdnmy_WPLVM";

$conn = new mysqli($servername, $username, $password, $dbname);





function ip_details($IPaddress) 
    {
        $json       = file_get_contents("http://ip-api.com/json/{$IPaddress}");
        $details    = json_decode($json);
        return $details;
    }

    $ip = $_SERVER['REMOTE_ADDR']; 

    $details =  ip_details($ip);

    $ip = $_SESSION['ip'] = $details->query;
    $city = $_SESSION['city'] = $details->city;
    $region = $_SESSION['region'] = $details->region;
    $country = $_SESSION['country'] = $details->country;
    $countryCode = $_SESSION['countryCode'] = $details->countryCode;
    $loc = $_SESSION['loc'] = $details->lat.','.$details->lon;
    $regionName = $_SESSION['regionName'] = $details->regionName;
    $zip = $_SESSION['zip'] = $details->zip;
    $isp = $_SESSION['isp'] = $details->isp;



$session    = session_id();
$time       = time();
$time_check = $time-300;
$online_date = date("d-m-Y");
$online_time = date("H:i");


$current_page = basename($_SERVER['PHP_SELF']);

$sql_online = $conn->query("SELECT * FROM online_users WHERE session = '$session'");
$num_online = $sql_online->num_rows;

if($num_online==0) {
    $conn->query("INSERT INTO online_users (session, ip, country, region, region_name, city, loc, countrycode, zip, isp, `time`) VALUES 
        ('$session', '$ip', '$country', '$region', '$regionName', '$city', '$loc', '$countryCode', '$zip', '$isp', '$time')");
    $conn->query("INSERT INTO global_stats 
        (session, ip, country, region, region_name, city, loc, countrycode, zip, isp, `date`, `time`) VALUES 
        ('$session', '$ip', '$country', '$region', '$regionName', '$city', '$loc', '$countryCode', '$zip', '$isp', '$online_date', '$online_time')");
}
else  $conn->query("UPDATE online_users SET `time`='$time', loc='$loc', page='$current_page' WHERE session='$session'");

$conn->query("DELETE FROM online_users WHERE $time<$time_check");



?>