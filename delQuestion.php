<?php
require 'conn.php';
$id = $_POST['id'];
$sql = "DELETE FROM questions WHERE id = '$id'";
mysqli_query($conn, $sql);
?>