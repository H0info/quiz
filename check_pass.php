<?php

include "config.php";

$passcode = $_POST['passcode'];

$sql = $conn->query("SELECT admin_passcode FROM gestion WHERE admin_passcode = '$passcode'");
$num = $sql->num_rows;

if($num!=0) echo '1'; else echo '0';

?>