<?php

include "config.php";

$type = $_POST['type'];
$id = $_POST['id'];

$sql = $conn->query("SELECT * FROM quizz WHERE id = '$id'");
$row = $sql->fetch_assoc();

if($type == "info")
{

$sql_stats_1 = $conn->query("SELECT count(q_1_id) AS count_1, sum(q_1_score) as score_1 FROM `quizz_stats` WHERE q_1_id = '$id'");
$row_stats_1 = $sql_stats_1->fetch_assoc();
$count_1 = $row_stats_1['count_1'];
$score_1 = $row_stats_1['score_1'];

$sql_stats_2 = $conn->query("SELECT count(q_2_id) AS count_2, sum(q_2_score) as score_2 FROM `quizz_stats` WHERE q_2_id = '$id'");
$row_stats_2 = $sql_stats_2->fetch_assoc();
$count_2 = $row_stats_2['count_2'];
$score_2 = $row_stats_2['score_2'];

$sql_stats_3 = $conn->query("SELECT count(q_3_id) AS count_3, sum(q_3_score) as score_3 FROM `quizz_stats` WHERE q_3_id = '$id'");
$row_stats_3 = $sql_stats_3->fetch_assoc();
$count_3 = $row_stats_1['count_3'];
$score_3 = $row_stats_1['score_3'];

$all_count = $count_1+$count_2+$count_3;
$all_score = $score_1+$score_2+$score_3;

	?>

	  <div class="header">A propos</div>
			<div class="content">
			    <div class="evviede-venir-title">
			        <h2>
			            <span>Statistisques</span> Générale <br />
			            de cet quizz
			        </h2>
			        <h3>
			            Nombre d'impressions : <?php echo $all_count; ?>
			            <br />
			            Nombre de reponses : <?php echo $all_count; ?>
			            <br />
			            Réponses correctes : <?php echo $all_score	; ?>
			        </h3>
			    </div>
			</div>


	<?php
}

if($type == "edit")
{
	?>

	  	<div class="header">Modifier un quizz</div>
		  <div class="content">
		    <p><input id="question" value="<?php echo $row['question']; ?>"></p>
		    <p><input id="answer" value="<?php echo $row['answer']; ?>"></p>
		  </div>
		  <div class="actions">
		      <div class="ui negative button">
		        Annuler
		      </div>
		      <div class="ui positive right icon button" onclick="upd_quizz(<?php echo $id; ?>)">
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
		    <p><input id="question" placeholder="Question"></p>
		    <p><input id="answer" placeholder="Réponse"></p>
		  </div>
		  <div class="actions">
		      <div class="ui negative button">
		        Annuler
		      </div>
		      <div class="ui positive right icon button" onclick="add_quizz()">
		        Ajouter
		        <i class="checkmark icon"></i>
		      </div>
	   	 </div>

	<?php
}
 
?>

<script>
function upd_quizz(id)
{
	 let question = $('#question').val();
	 let answer = $('#answer').val();

	  $.ajax({
        url : 'upd_quizz.php',
        type : 'POST',
        data : ({question:question, answer:answer, id:id}),
        success: function(html) 
                { 
                  $('#'+id).html(html);
                }
      });

    alertify.success('Mis a jour!'); 
}

function add_quizz()
{	
	 let question = $('#question').val();
	 let answer = $('#answer').val();
	$.ajax({
        url : 'add_quizz.php',
        type : 'POST',
        data : ({question:question, answer:answer}),
        success: function(html) 
                { 
                	admin_quizz();
                	alertify.success("Quizz ajouté!")
                }
      });
}


</script>
