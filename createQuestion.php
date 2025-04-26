<?php
require 'conn.php';
$quiz_id = $_POST['quiz_id'];
$value = $_POST['value'];

$sql = "INSERT INTO questions (quiz_id, value) VALUES ('$quiz_id', '$value')";

?>