<?php
include "config.php";

$id = $_POST['id'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$link = $_POST['link'];
$select = $_POST['select'];

$conn->query("UPDATE ads SET titre='$titre', description='$description', link='$link', ad_group='$select' WHERE id='$id'");

echo "UPDATE ads SET titre='$titre', description='$description', link='$link', ad_group='$select' WHERE id='$id'";
?>
