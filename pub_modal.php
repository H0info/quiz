<?php

include "config.php";

$type = $_POST['type'];
$id = $_POST['id'];

$sql = $conn->query("SELECT * FROM ads_interests WHERE id = '$id'");
$row = $sql->fetch_assoc();



if($type == "edit")
{
	?>

	  <div class="header">Modification</div>
		  <div class="content">
		    <p><input id="ed_description" value="<?php echo $row['description']; ?>"></p>
		  </div>
		  <div class="actions">
		      <div class="ui negative button">
		        Annuler
		      </div>
		      <div class="ui positive right icon button" onclick="upd_interest(<?php echo $id; ?>)">
		        Confirmer
		        <i class="checkmark icon"></i>
		      </div>
	   	 </div>

	<?php
}


if($type == "add")
{
	?>

	  <div class="header">Ajouter un nouveau quizz</div>
		  <div class="content">
		    <p><input id="nv_description" placeholder="Description"></p>
		  </div>
		  <div class="actions">
		      <div class="ui negative button">
		        Annuler
		      </div>
		      <div class="ui positive right icon button" onclick="add_interest()">
		        Ajouter
		        <i class="checkmark icon"></i>
		      </div>
	   	 </div>

	<?php
}
 
?>

<script>
function upd_interest(id)
{
	 let description = $('#ed_description').val();

	  $.ajax({
        url : 'upd_interest.php',
        type : 'POST',
        data : ({description:description, id:id}),
        success: function(html) 
                { 
                  $('#'+id).html(html);
                }
      });

    alertify.success('Mis a jour!'); 
}

function add_interest()
{	
	 let description = $('#nv_description').val();
	$.ajax({
        url : 'add_interest.php',
        type : 'POST',
        data : ({description:description}),
        success: function(html) 
                { 
                	admin_pub();
                	alertify.success("Ajouté!")
                }
      });
}



</script>