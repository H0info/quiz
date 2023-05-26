<?php

include "config.php";

$type = $_POST['type'];
$id = $_POST['id'];

$sql = $conn->query("SELECT * FROM personal WHERE id = '$id'");
$row = $sql->fetch_assoc();

if($type == "edit")
{
	?>

	  	<div class="header">Modification </div>
		  <div class="content" style="width: 80%">

			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="mail icon"></i>
			  <input id="email" type="text" placeholder="E-mail" value="<?php echo $row['email']; ?>">
			  <a class="ui tag label">
			    E-mail
			  </a>
			</div>

			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="lock icon"></i>
			  <input id="password" type="text" placeholder="Mot de passe" value="<?php echo $row['password']; ?>">
			  <a class="ui tag label">
			    Mot de passe
			  </a>
			</div>
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="info icon"></i>
			  <input id="nom" type="text" placeholder="Nom" value="<?php echo $row['nom']; ?>">
			  <a class="ui tag label">
			    Nom
			  </a>
			</div>
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="info icon"></i>
			  <input id="prenom" type="text" placeholder="Prenom" value="<?php echo $row['prenom']; ?>">
			  <a class="ui tag label">
			    Prenom
			  </a>
			</div>
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="calendar alternate icon"></i>
			  <input id="date" type="text" placeholder="Date de naissance" value="<?php echo $row['date']; ?>">
			  <a class="ui tag label">
			    Date de naissance
			  </a>
			</div>
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="map marker icon"></i>
			  <input id="gps_region" type="text" placeholder="Région" value="<?php echo $row['gps_regionname']; ?>">
			  <a class="ui tag label">
			    Région
			  </a>
			</div>
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="map pin icon"></i>
			  <input id="gps_city" type="text" placeholder="Cité" value="<?php echo $row['gps_city']; ?>">
			  <a class="ui tag label">
			    Cité
			  </a>
			</div>

		  </div>
		  <div class="actions">
		      <div class="ui negative button">
		        Annuler
		      </div>
		      <div class="ui positive right icon button" onclick="upd_user(<?php echo $id; ?>)">
		        Confirmer
		        <i class="checkmark icon"></i>
		      </div>
	   	 </div>


	<?php
}


?>

<script>
function upd_user(id)
{	
	 let email = $('#email').val();
	 let password = $('#password').val();
	 let nom = $('#nom').val();
	 let prenom = $('#prenom').val();
	 let date = $('#date').val();
	 let gps_city = $('#gps_city').val();
	 let gps_region = $('#gps_region').val();

	  $.ajax({
	        url : 'upd_user.php',
	        type : 'POST',
	        data : ({id:id, email:email, password:password, nom:nom, prenom:prenom, date:date, gps_region:gps_region, gps_city:gps_city}),
	        success: function(html) 
	                { 
	                  $('#'+id).html(html);
	                }
	      });

    alertify.success('Mis a jour!'); 
}




</script>
