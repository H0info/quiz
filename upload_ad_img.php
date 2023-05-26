<?php
include "config.php";

$id = $_POST['id'];
if ($_POST["label"]) {
    $label = $_POST["label"];
}

 $sql_last = $conn->query("SELECT * FROM ads");
 $num_last = $sql_last->num_rows;

if(isset($id)) $id=$num_last;


$filename = $_FILES["file"]["name"];
$ext = substr(strrchr($filename, '.'), 1);

if($ext == "png" or $ext == "jpeg" or $ext == "jpg")
{
    $filename = "pub_".$id.".".$ext;
    move_uploaded_file($_FILES["file"]["tmp_name"], "ads/" . $filename);
    $filename = "ads/".$filename;
    echo $filename;
} else echo 'Erreur';

?>
