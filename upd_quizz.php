<?php

include "config.php";

$id = $_POST['id'];
$question = $_POST['question'];
$answer = $_POST['answer'];

$sql = $conn->query("UPDATE quizz SET question ='$question', answer = '$answer' WHERE id = '$id'");

?>

  <td><?php echo $id; ?></td>
  <td><?php echo $question; ?></td>
  <td><?php echo $answer; ?></td>
  <td>
  	<a href="javascript:void(0)" onclick="get_modal('info', <?php echo $id; ?>);"><i class="info green icon"></i></a> 
  	<a href="javascript:void(0)" onclick="get_modal('edit', <?php echo $id; ?>);"><i class="pencil blue icon"></i> </a>
  	<a href="javascript:void(0)" onclick="delete_quizz(<?php echo $id; ?>);"><i class="close icon red icon"></i>  </a>
  </td>

