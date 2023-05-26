<?php

include "config.php";

$question = $_POST['question'];
$answer = $_POST['answer'];

$sql = $conn->query("INSERT INTO quizz (question, answer) VALUES ('$question', '$answer')");

?>