<?php
include "config.php";

$sql_users = $conn->query("SELECT * FROM personal ORDER BY id DESC");
?>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script src="dist/semantic.min.js"></script>
<div class="ui modal" id="modal">
</div>


<div class="ui large modal" id="modal_gps">
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

<div class="container wow fadeInLeft">
	<div class="row">
	  <div class="evviede-venir-title" style="text-align: left; margin-bottom: 25px;">
	        <a href="#" onclick="retour()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
	   </div>
	   <table class="ui fixed table" style="padding: 0">
		  <thead>
		    <tr>
		    	<th style="width: 5%">ID</th>
			    <th style="width: 25%">E-mail</th>
			    <th style="width: 20%">Nom et Prenom</th>
			    <th style="width: 10%">Pays</th>
			    <th style="width: 25%">Cité / Région - Code postale</th>
			    <th></th>
			  </tr>
		</thead>
		<tbody>
			<?php
			while ($row_users = $sql_users->fetch_assoc())
			{
				?>
					<tr id="<?php echo $row_users['id']; ?>">
						<td><?php echo $row_users['id']; ?></td>
						<td><?php echo $row_users['email']; ?></td>
						<td><?php echo $row_users['nom'].' '.$row_users['prenom']; ?></td>
						<td><i class="><?php echo $row_users['gps_countrycode']; ?> flag"></i><?php echo $row_users['gps_country']; ?></td>
						<td><?php echo $row_users['gps_regionname'].' / '.$row_users['gps_city'].' - '.$row_users['gps_zip']; ?>
						<a href="#" onclick="user_gps_modal('https://maps.google.com/maps?q=<?php echo $row_users['gps_loc']; ?>&hl=fr&z=14&amp;output=embed')">
								<i class="map marker icon" onclick=""></i>
						</a></td>
						<td>
							<a href="javascript: void(0)" onclick="users_modal('edit', '<?php echo $row_users['id']; ?>')"><i class="pencil blue icon"></i></a>
							<a href="javascript: void(0)" onclick="del_user(<?php echo $row_users['id']; ?>)"><i class="close red icon"></i></a>
						</td>
					</tr>
				<?php
			}
			?>			
		</tbody>
	</table>
	</div>
</div>




<script>

function user_gps_modal(gps)
	{	
		document.getElementById("maps_frame").src=gps;
		$('#modal_gps').modal('show');
	}

function users_modal(type, id)
{	
	$.ajax({
        url : 'users_modal.php',
        type : 'POST',
        data : ({type:type, id:id}),
        success: function(html) 
        { 
          $('#modal').html(html);
          $('#modal').modal('show');
        }
      });
}

function del_user(id)
{	
	 $.ajax({
                url : 'del_user.php',
                type : 'POST',
                data : ({id:id}),
                success: function(html) 
                { 
                  document.getElementById(id).style="display: none";
                  alertify.error("Utilisateur supprimé!")
                }
              });
}

</script>