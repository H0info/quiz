<?php
include "config.php";

$sql_quizz = $conn->query("SELECT * FROM ads_interests ORDER BY id DESC");

?>

<div class="ui modal" id="modal">

</div>

<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">



    <div class="container wow fadeInLeft">
        <div class="row">
          <div class="evviede-venir-title" style="text-align: left; margin-bottom: 25px;">
                <a href="#" onclick="retour()" style="background-position: 10% 50%; background-image: url(images/rt-arrorw.png); padding: 12px 22px 12px 14px;">&nbsp; &nbsp; Retour</a>
                &nbsp;
                <a href="#" onclick="pub_modal('add',0)" style="background: #5ebb53; padding: 12px 12px 12px 12px;">Ajouter un nouveau type &nbsp;&nbsp;</a>
            </div>
				<table class="ui fixed table" style="padding: 0">
				  <thead>
				    <tr>
				    	<th style="width: 5%">ID</th>
					    <th style="width: 75%">Interest</th>
					    <th style="width: 20%">Opérations</th>
					  </tr>
				</thead>
				<tbody>
				  	<?php
				  		while ($row_quizz = $sql_quizz->fetch_assoc())
				  		{
				  			?>
					  			<tr id="<?php echo $row_quizz['id']; ?>">
							      <td><?php echo $row_quizz['id']; ?></td>
							      <td><?php echo $row_quizz['description']; ?></td>
							      <td>
							      	<a href="javascript:void(0)" onclick="pub_modal('edit',<?php echo $row_quizz['id']; ?>)"><i class="pencil blue icon"></i> </a>
							      	<a href="javascript:void(0)" onclick="del_interest(<?php echo $row_quizz['id']; ?>);"><i class="close icon red icon"></i>  </a>
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
function del_interest(id)
{	
	 $.ajax({
        url : 'del_interest.php',
        type : 'POST',
        data : ({id:id}),
        success: function(html) 
        { 
          document.getElementById(id).style="display: none";
          alertify.error("Supprimé!")
        }
      });
}
</script>