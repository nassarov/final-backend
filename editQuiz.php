<?php
require 'conn.php';
$id = $_POST['id'];
$title = $_POST['title'];

$sql = "UPDATE quizzes SET title = '$title' WHERE id = '$id'";
mysqli_query($conn, $sql)
?>