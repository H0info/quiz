<?php

include "config.php";

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$company = $_POST['company'];
$matricule = $_POST['matricule'];
$owner = $_POST['owner'];
$industry = $_POST['industry'];



$conn->query("UPDATE business SET email='$email', password='$password', company='$company', matricule='$matricule', owner='$owner', industry='$industry' WHERE id='$id'");

$sql = $conn->query("SELECT * FROM business WHERE id = '$id'");
$row_users = $sql->fetch_assoc();

?>
		<td><?php echo $row_users['id']; ?></td>
		<td><?php echo $row_users['company']; ?></td>
		<td><?php echo $row_users['owner']; ?></td>
		<td><?php echo $row_users['industry']; ?></td>
		<td><?php echo $row_users['email']; ?></td>
		<td><?php echo $row_users['matricule']; ?></td>
		<td> 
		<a href="#" onclick="user_gps_modal('https://maps.google.com/maps?q=<?php echo $row_users['gps_loc']; ?>&hl=fr&z=14&amp;output=embed')">
				<i class="map marker icon" onclick=""></i>
		</a>
			<a href="javascript: void(0)" onclick="globs_modal('edit', '<?php echo $row_users['id']; ?>')"><i class="pencil blue icon"></i></a>
			<a href="javascript: void(0)" onclick="del_glob(<?php echo $row_users['id']; ?>)"><i class="close red icon"></i></a>
		</td>
			
