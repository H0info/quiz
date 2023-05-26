<?php
include "config.php";

$sql_users = $conn->query("SELECT * FROM ads ORDER BY id DESC");
?>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script src="dist/semantic.min.js"></script>

<div class="ui modal" id="modal">
</div>


<div class="container wow fadeInLeft">
	<div class="row">
	  <div class="evviede-venir-title" style="text-align: left; margin-bottom: 25px;">
	        <a href="#" onclick="retour()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
	        <a href="#" onclick="add_pub()" id="add_button" style="padding: 12px 12px 12px 12px;">Ajouter une pub &nbsp;&nbsp;&nbsp;&nbsp;</a>
	   </div>
	   <div id="tabb">
	   <table class="ui fixed table" style="padding: 0">
		  <thead>
		    <tr>
			    <th style="width: 10%">Titre</th>
			    <th style="width: 30%">Description</th>
			    <th style="width: 10%">Preview</th>
			    <th style="width: 25%">Interêt</th>
			    <th style="width: 15%">Vues</th>
			    <th></th>
			  </tr>
		</thead>
		<tbody>
			<?php
			while ($row_users = $sql_users->fetch_assoc())
			{
				?>
					<tr id="<?php echo $row_users['id']; ?>">
						<td><?php echo $row_users['titre']; ?></td>
						<td><?php echo $row_users['description']; ?></td>
						<td>
							<a href="#" onclick="upd_ad('image', '<?php echo $row_users['id']; ?>')"><i class="eye green icon"></i></a> 
							<a href="#" onclick="upd_ad('video', '<?php echo $row_users['id']; ?>')"><i class="play red icon"></i></a>
						</td>
						<td><?php echo $row_users['ad_group']; ?></td>
						<td><?php echo $row_users['views'].' / '.$row_users['requested_views']; ?></td>
						<td>
							<a href="javascript: void(0)" onclick="upd_ad('data', '<?php echo $row_users['id']; ?>')"><i class="pencil blue icon"></i></a>
							<a href="javascript: void(0)" onclick="del_ad(<?php echo $row_users['id']; ?>)"><i class="close red icon"></i></a>
						</td>
					</tr>
				<?php
			}
			?>			
		</tbody>
	</table>
</div>
	</div>
</div>

<script>

function upd_ad(type, id)
{
	 $.ajax({
	    url : 'upd_ad.php',
	    type : 'POST',
	    data : ({type:type, id:id}),
	    success: function(html) 
	    {
	      $('#modal').html(html);
	      $('#modal').modal('show');
	    }
	  });
}
function add_pub()
{
	//document.getElementById("add_button").style="display: none"
	$.ajax({
        url : 'add_ad_1.php',
        type : 'POST',
        success: function(html) 
        { 
          $('#tabb').html(html);
        }
      });
}
function del_ad(id)
{	
	 $.ajax({
                url : 'del_ad.php',
                type : 'POST',
                data : ({id:id}),
                success: function(html) 
                { 
                  document.getElementById(id).style="display: none";
                  alertify.error("Pub supprimé!")
                }
              });
}
</script>