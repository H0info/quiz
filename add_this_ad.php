<?php
include "config.php";

$sql_last = $conn->query("SELECT * FROM ads");
$num_last = $sql_last->num_rows;
$num_last++;

$titre = $_POST['titre'];
$description = $_POST['description'];
$link = $_POST['link'];
$user = $_POST['user'];
$ad_group = $_POST['ad_group'];
$req_views = $_POST['req_views'];
$image = $_POST['image'];
$video = $_POST['video'];



$conn->query("INSERT INTO `ads`(`user`, `titre`, `description`, `image`, `link`, `video`, `ad_group`, `requested_views`) 
	VALUES ('$user', '$titre', '$description', '$image', '$link', '$video', '$ad_group', '$req_views')");

?>
