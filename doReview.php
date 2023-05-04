<?php

$name = $_POST['name'];
$email = $_POST['email'];
$movieTitle = $_POST['movietitle'];
$star = $_POST['star'];
$text = $_POST['text'];

include "dbFunctions.php";
$controller = new controller();
$run = $controller -> run();
$result = $run->addReview($text, $star);

?>