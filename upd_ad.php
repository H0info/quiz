<?php

include "config.php";

$type = $_POST['type'];
$id = $_POST['id'];
echo '<input id="id" value="'.$id.'" hidden>';

$sql = $conn->query("SELECT * FROM ads WHERE id = '$id'");
$row = $sql->fetch_assoc();


?>

<style>
input[type="file"] {
    display: none;
}
.file_label {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 12px 12px;
    cursor: pointer;
}
</style>

<?php

if($type == "data")
{
	?>

	<div class="header">Modification </div>
		  <div class="content" style="width: 80%">
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="info icon"></i>
			  <input id="titre" type="text" value="<?php echo $row['titre']; ?>">
			  <a class="ui tag label">
			    Titre
			  </a>
			</div>
			<p>&nbsp;</p>
			<div class="ui right labeled left icon input"  style="width: 100%;">
			  <i class="info icon"></i>
			  <input id="description" type="text" value="<?php echo $row['description']; ?>">
			  <a class="ui tag label">
			    Description
			  </a>
			</div>
			<p>&nbsp;</p>
			<div class="ui right labeled left icon input"  style="width: 100%; padding:">
			  <i class="info icon"></i>
			  <input id="link" type="text" value="<?php echo $row['link']; ?>">
			  <a class="ui tag label">
			    Lien
			  </a>
			</div>
			<p>&nbsp;</p>
			<select id="select">
				<?php
				$sql_groups = $conn->query("SELECT * FROM ads_interests ORDER BY id DESC");
				while ($row_groups=$sql_groups->fetch_assoc())
				{
					if($row_groups['description']==$row['ad_group']) $selected = "selected"; else $selected = "";
					?>
						<option value="<?php echo $row_groups['description']; ?>"><?php echo $row_groups['description']; ?></option>
					<?php
				}
				?>
			</select>
			
	   	</div>
		<div class="actions">
		      <div class="ui negative button" onclick="alertify.error('Annulé!')">
		        Annuler
		      </div>
		      <div class="ui positive right icon button" onclick="upd_ad_data(<?php echo $id; ?>)">
		        Confirmer
		        <i class="checkmark icon"></i>
		      </div>
	   	 </div>
	<?php
}

if($type == "image")
{
	?>
	<div class="header">Modifier l'image</div>
		<div class="content">
			<div class="ui segment">
			  <div class="ui two column very relaxed grid">
			    <div class="column" style="text-align: center">
			    	<p>Taille : 800px / 800px</p><br>
			      <div class="ui action input">
			      	<form method="post" id="fileinfo" name="fileinfo" action="javascript:void(0)">
			      	  <label for="file" class="file_label">Changer l'image &nbsp;&nbsp;&nbsp;<i class="cloud upload icon"></i></label>
					  <input type="file" name="file" id="file" /> 
					  <button class="ui button" onclick="submitForm()">Transfer</button>
					</form>
					</div>
			    </div>
			    <div class="column" style="text-align: center">

			      <img id="preview" src="<?php echo $row['image']; ?>" width="100%">
			    </div>
			  </div>
			  <div class="ui vertical divider">
			    <i class="arrow right icon"></i>
			  </div>
			</div>
		</div>
		<div class="actions">
		      <div class="ui positive button">
		        Ok
		      </div>
	   	 </div>
	<?php
}

if($type == "video")
{
	?>
	<div class="header">Modifier la vidéo</div>
		<div class="content">
			<div class="ui segment">
			  <div class="ui two column very relaxed grid">
			    <div class="column" style="text-align: center">
			      <div class="ui action input">
			      	<form method="post" id="fileinfo" name="fileinfo" action="javascript:void(0)">
			      	  <label for="file" class="file_label">Changer la vidéo &nbsp;&nbsp;&nbsp;<i class="cloud upload icon"></i></label>
					  <input type="file" name="file" id="file" /> 
					  <button class="ui button" onclick="submitVideo()">Transfer</button>
					</form>
					</div>
			    </div>
			    <div class="column" style="text-align: center">

			      <video id="preview" src="<?php echo $row['video']; ?>" width="80%">
			    </div>
			  </div>
			  <div class="ui vertical divider">
			    <i class="arrow right icon"></i>
			  </div>
			</div>
		</div>
		<div class="actions">
		      <div class="ui positive button">
		        Ok
		      </div>
	   	 </div>
	<?php
}


?>
<script>
	$('#select').dropdown();
</script>
<script>
function upd_ad_data(id)
{
	 let titre = $('#titre').val();
	 let description = $('#description').val();
	 let link = $('#link').val();
	 let select = $('#select').val();


	 $.ajax({
	    url : 'upd_ad_data.php',
	    type : 'POST',
	    data : ({id:id, titre:titre, description:description, select:select, link:link}),
	    success: function(html) 
	    {	
	    	  admin_ads();
              alertify.success("Mis a jour!")
	    }
	  });

}



</script>

<script type="text/javascript">




    $("#file").change(function(){
	  document.getElementById("preview").src=window.URL.createObjectURL(this.files[0]);
	});

</script>