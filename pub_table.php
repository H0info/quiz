<?php

include "config.php";

$pub = $_POST['pub'];

$sql = $conn->query("SELECT * FROM ads_feedback WHERE pub = '$pub'");
$num = $sql->num_rows;

?>
<table class="ui fixed table wow fadeInLeft" style="padding: 0" id="pub_table">
	  <thead>
	    <tr>
	    	<th style="width: 15%">Publicité</th>
		    <th style="width: 45%">Commentaires</th>
		    <th style="width: 25%">Pays / Région</th>
		    <th style="width: 15%">Date et Heure</th>
		  </tr>
	</thead>
	<tbody>
	  	<?php
	  	if($num == 0)
	  	{
	  		?>
	  			<tr id="<?php echo $row['id']; ?>">
					<td colspan="5">Pas de commentaire pour cette pub.</td>
				</tr>
			<?php
	  	}
	  		while ($row = $sql->fetch_assoc())
	  		{
	  			$id_pub = $row['pub'];
	  			$sql_pub = $conn->query("SELECT titre FROM ads WHERE id = '$id_pub'");
	  			$row_pub = $sql_pub->fetch_assoc();
	  			$row_gps = $row['gps_loc'];
	  			?>
		  			<tr id="<?php echo $row['id']; ?>">
				      <td><?php echo $row_pub['titre']; ?></td>
				      <td><?php echo $row['feedback']; ?></td>
				      <td><i class="<?php echo strtolower($row['gps_country']); ?> flag" onclick="
				      ip_modal('https://maps.google.com/maps?q=<?php echo $row['gps_loc']; ?>&hl=fr&z=14&amp;output=embed')"></i><?php echo $row['gps_region'].' - '.$row['gps_city']; ?>	</td>

				      <td><?php echo $row['date'].' '.$row['time']; ?></i></td>
				      
				    </tr>
	  			<?php
	  		}
	    ?>
	</tbody>
</table>
