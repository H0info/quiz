<?php
$id = $_POST['id'];
if ($_POST["label"]) {
    $label = $_POST["label"];
}
$filename = $_FILES["file"]["name"];
$ext = substr(strrchr($filename, '.'), 1);


if ($ext == "mp4") {
        
        $filename = "pub_".$id.".".$ext;
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "videos/" . $filename);
            echo "Téléversé";
        
    } else {
    echo "Erreur";
}
?>
