<?php
include "config.php";

$sql = $conn->query("SELECT * FROM ads_feedback ORDER BY id DESC");

?>

<div class="ui large modal" id="modal">
		<div class="header">Information confidentielle</div>
		  <div class="content">
		  	<iframe 
		  		  id="maps_frame"
					  width="100%" 
					  height="400" 
					  frameborder="0" 
					  scrolling="no" 
					  marginheight="0" 
					  marginwidth="0" 
					  src="s"
					 >
					 </iframe>
		  </div>
		  <div class="actions">
		      <div class="ui positive right icon button">
		        Confirmer
		        <i class="checkmark icon"></i>
		      </div>
	   	 </div>
</div>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">



    <div class="container wow fadeInLeft">
        <div class="row">
          <div class="evviede-venir-title" style="text-align: left; margin-bottom: 25px;">
                <a href="#" onclick="retour()" style="margin-right: 50px; background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; &nbsp; Retour</a>
                <select id="pubs" style="padding-left: 15px;" onchange="pub_table()">
                	<?php 
                	$sql_pubs = $conn->query("SELECT * FROM ads ORDER BY id ASC");
                	echo '<option value="">Toute les pubs</option>';
                	while ($row_pubs = $sql_pubs->fetch_assoc())
                	{
                			echo '<option value="'.$row_pubs['id'].'">'.$row_pubs['titre'].'</option>';
                	}
                	?>
                </select>
            </div>
				<table class="ui fixed table" style="padding: 0" id="pub_table">
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
							      <td><a href="#" onclick="
							      ip_modal('https://maps.google.com/maps?q=<?php echo $row['gps_loc']; ?>&hl=fr&z=14&amp;output=embed')"><i class="<?php echo strtolower($row['gps_country']); ?> flag"></i></a><?php echo $row['gps_regionname'].' - '.$row['gps_city']; ?>	</td>

							      <td><?php echo $row['date'].' '.$row['time']; ?></i></td>
							      
							    </tr>
				  			<?php
				  		}
				    ?>
				</tbody>
				</table>
			</div>
		</div>
		<script type="text/javascript" src="dist/semantic.min.js"></script>
		<script>
	function ip_modal(gps)
	{
		document.getElementById("maps_frame").src=gps;
		$('#modal').modal('show');
	}


$('#pubs')
  .dropdown()
;

function pub_table()
{
	let pub = $('#pubs').val();

	 $.ajax({
	    url : 'pub_table.php',
	    type : 'POST',
	    data : ({pub:pub}),
	    success: function(html) 
	    {
	      $('#pub_table').html(html);
	    }
	  });
}
		</script>	
