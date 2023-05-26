<?php

include "config.php";

$id = $_POST['id'];

$sql = $conn->query("DELETE FROM personal WHERE id = '$id'");

?>
