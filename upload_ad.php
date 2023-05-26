<?php
include "config.php";

$sql_last = $conn->query("SELECT * FROM ads");
$num_last = $sql_last->num_rows;
$num_last++;


if ($_POST["label"]) {
    $label = $_POST["label"];
}
$filename = $_FILES["file"]["name"];
$ext = substr(strrchr($filename, '.'), 1);


if ($ext == "mp4") {
        
        $filename = "pub_".$num_last.".".$ext;
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "videos/" . $filename);
            $filename = "videos/".$filename;
            echo $filename;
        
    } else {
    echo "Erreur";
}
?>
