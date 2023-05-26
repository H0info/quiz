<?php
include "config.php";

$sql_quizz = $conn->query("SELECT * FROM quizz ORDER BY id DESC");

?>

<div class="ui modal" id="modal">

</div>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">



    <div class="container wow fadeInLeft">
        <div class="row">
          <div class="evviede-venir-title" style="text-align: left; margin-bottom: 25px;">
                <a href="#" onclick="retour()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
                &nbsp;
                <a href="#" onclick="get_modal('add',0)" style="background: #5ebb53; padding: 12px 12px 12px 12px;">Ajouter un quizz &nbsp;&nbsp;</a>
            </div>
				<table class="ui fixed table" style="padding: 0">
				  <thead>
				    <tr>
				    	<th style="width: 5%">ID</th>
					    <th style="width: 40%">Quizz</th>
					    <th style="width: 40%">Réponse</th>
					    <th style="width: 10%;">Opérations</th>
					  </tr>
				</thead>
				<tbody>
				  	<?php
				  		while ($row_quizz = $sql_quizz->fetch_assoc())
				  		{
				  			?>
					  			<tr id="<?php echo $row_quizz['id']; ?>">
							      <td><?php echo $row_quizz['id']; ?></td>
							      <td><?php echo $row_quizz['question']; ?></td>
							      <td><?php echo $row_quizz['answer']; ?></td>
							      <td>
							      	<a href="javascript:void(0)" onclick="get_modal('info', <?php echo $row_quizz['id']; ?>);"><i class="info green icon"></i></a> 
							      	<a href="javascript:void(0)" onclick="get_modal('edit', <?php echo $row_quizz['id']; ?>);"><i class="pencil blue icon"></i> </a>
							      	<a href="javascript:void(0)" onclick="delete_quizz(<?php echo $row_quizz['id']; ?>);"><i class="close icon red icon"></i>  </a>
							      </td>
							    </tr>
				  			<?php
				  		}
				    ?>
				</tbody>
				</table>
			</div>
		</div>



<script src="dist/semantic.min.js"></script>

<script>

function get_modal(type, id)
{	
        $.ajax({
                url : 'get_modal.php',
                type : 'POST',
                data : ({type:type, id:id}),
                success: function(html) 
                { 
                  $('#modal').html(html);
                  $('#modal').modal('show');
                }
              });

    
}

function delete_quizz(id)
{	
	 $.ajax({
                url : 'del_quizz.php',
                type : 'POST',
                data : ({id:id}),
                success: function(html) 
                { 
                  document.getElementById(id).style="display: none";
                  alertify.error("Quizz supprimé!")
                }
              });
}
</script>