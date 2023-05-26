<?php

include "config.php";

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date = $_POST['date'];
$gps_city = $_POST['gps_city'];
$gps_region = $_POST['gps_region'];


$conn->query("UPDATE personal SET email='$email', password='$password', nom='$nom', prenom='$prenom', `date`='$date', gps_city='$gps_city', gps_regionname='$gps_region' WHERE id='$id'");

$sql = $conn->query("SELECT * FROM personal WHERE id = '$id'");
$row_users = $sql->fetch_assoc();

?>


	<td><?php echo $row_users['id']; ?></td>
	<td><?php echo $row_users['email']; ?></td>
	<td><?php echo $row_users['nom'].' '.$row_users['prenom']; ?></td>
	<td><i class="><?php echo $row_users['gps_countrycode']; ?> flag"></i><?php echo $row_users['gps_country']; ?></td>
	<td><?php echo $row_users['gps_regionname'].' / '.$row_users['gps_city'].' - '.$row_users['gps_zip']; ?>
	<a href="#" onclick="ip_modal('https://maps.google.com/maps?q=<?php echo $row['gps_loc']; ?>&hl=fr&z=14&amp;output=embed')">
			<i class="map marker icon" onclick=""></i>
	</a></td>
	<td>
		<a href="javascript: void(0)" onclick="users_modal('edit', '<?php echo $row_users['id']; ?>')"><i class="pencil blue icon"></i></a>
		<a href="javascript: void(0)"><i class="close red icon"></i></a>
	</td>
