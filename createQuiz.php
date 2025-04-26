<?php
require 'conn.php';
$title = $_POST['title'];
$sql = "INSERT INTO quizzes (title) VALUES ('$title')";
?>