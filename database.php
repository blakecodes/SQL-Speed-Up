<?php
/*Database handler*/
require_once ('db.php');

/*Question marks*/
$questions = str_repeat('?,', 3);
$questions = rtrim($questions, ',');

/*Query*/
$query = $handler->prepare("INSERT INTO `PDO-Inserts` (first_name, last_name, email) VALUES ($questions)");
$query->execute($_POST['data']);

 
?>