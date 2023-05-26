<?php

include "config.php";

$table = $_POST['table'];
$row = $_POST['row'];
$value = $_POST['value'];

$sql = $conn->query("UPDATE $table SET $row = '$value'");

echo "UPDATE $table SET $row = '$value'";

?>
