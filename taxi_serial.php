<?php

include "config.php";

$pin = $_POST['pin'];


$sql = $conn->query("SELECT * FROM business WHERE matricule = '$pin'");
$num = $sql->num_rows;
$row = $sql->fetch_assoc();

$_SESSION['taxi'] = $row['id'];
$_SESSION['taxi_serial'] = $row['taxi_serial'];

echo $num;


?>
