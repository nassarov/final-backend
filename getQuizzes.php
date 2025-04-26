<?php
require 'conn.php';
$sql = "SELECT * FROM quizzes";
$result = mysqli_query($conn, $sql);
$quizzes = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { //add to the array quiz
        $quizzes[] = $row;
    }
} 
?>