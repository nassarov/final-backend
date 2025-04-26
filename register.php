<?php
require 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];
$role = "user"; //default

$sql = "INSERT INTO users (email, password, role) VALUES ('$email', '$password', '$role')";

mysqli_close($conn);
?>