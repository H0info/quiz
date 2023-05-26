<?php
$id = $_POST['id'];
if ($_POST["label"]) {
    $label = $_POST["label"];
}

if($id=="")
{
  $sql_last = $conn->query("SELECT * FROM ads");
  $num_last = $sql_last->num_rows;
  $num_last++;
  $id = $num_last;
}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000)
&& in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        $filename = $id.$_FILES["file"]["name"];
        $ext = substr(strrchr($filename, '.'), 1);
        $filename = "pub_".$id.".".$ext;
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "ads/" . $filename);
            echo "Téléversé";
        
    }
} else {
    echo "Erreur";
}
?>
