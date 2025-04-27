<?php
require 'conn.php';
$id = $_POST['id'];
$value = $_POST['value'];

$sql = "UPDATE questions SET value = '$value' WHERE id = '$id'";
mysqli_query($conn, $sql)
?>