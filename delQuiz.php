<?php
require 'conn.php';
$id = $_POST['id']; //id from form
$sql = "DELETE FROM quizzes WHERE id = '$id'";
?>