<?php

include "config.php";

$id = $_POST['id'];
$description = $_POST['description'];

$sql = $conn->query("UPDATE ads_interests SET description ='$description' WHERE id = '$id'");

?>

  <td><?php echo $id; ?></td>
  <td><?php echo $description; ?></td>
  <td>
      <a href="javascript:void(0)" onclick="pub_modal('edit',<?php echo $id; ?>)"><i class="pencil blue icon"></i> </a>
      <a href="javascript:void(0)" onclick="del_interest(<?php echo $id; ?>);"><i class="close icon red icon"></i>  </a>
  </td>

