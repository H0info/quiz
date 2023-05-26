<?php

include "config.php";

$type = $_POST['type'];
$id = $_POST['id'];

$sql = $conn->query("SELECT * FROM business WHERE id = '$id'");
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
			  <input id="matricule" type="text" placeholder="Nom" value="<?php echo $row['matricule']; ?>">
			  <a class="ui tag label">
			    Matricule
			  </a>
			</div>	
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="user icon"></i>
			  <input id="owner" type="text" placeholder="Propriétaire" value="<?php echo $row['owner']; ?>">
			  <a class="ui tag label">
			    Propriétaire
			  </a>
			</div>
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="building icon"></i>
			  <input id="company" type="text" placeholder="Région" value="<?php echo $row['company']; ?>">
			  <a class="ui tag label">
			    Nom de l'entreprise
			  </a>
			</div>
			
			<p>&nbsp;</p>
			
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="map pin icon"></i>
			  <input id="industry" type="text" placeholder="Cité" value="<?php echo $row['industry']; ?>">
			  <a class="ui tag label">
			    Industrie
			  </a>
			</div>

		  </div>
		  <div class="actions">
		      <div class="ui negative button">
		        Annuler
		      </div>
		      <div class="ui positive right icon button" onclick="upd_glob(<?php echo $id; ?>)">
		        Confirmer
		        <i class="checkmark icon"></i>
		      </div>
	   	 </div>


	<?php
}


?>

<script>
function upd_glob(id)
{	
	 let email = $('#email').val();
	 let password = $('#password').val();
	 let matricule = $('#matricule').val();
	 let owner = $('#owner').val();
	 let industry = $('#industry').val();
	 let company = $('#company').val();

	  $.ajax({
	        url : 'upd_glob.php',
	        type : 'POST',
	        data : ({id:id, email:email, password:password, company:company, matricule:matricule, owner:owner, industry:industry}),
	        success: function(html) 
	                { 
	                  $('#'+id).html(html);
	                }
	      });

    alertify.success('Mis a jour!'); 
}




</script>
