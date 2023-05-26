<?php

include "config.php";

$id = $_POST['id'];

$sql = $conn->query("DELETE FROM ads WHERE id = '$id'");

?>
