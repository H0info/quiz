<?php

include "config.php";

$description = $_POST['description'];

$sql = $conn->query("INSERT INTO ads_interests (description) VALUES ('$description')");

?>