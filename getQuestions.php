<?php
require 'conn.php';
$quiz_id = $_POST['quiz_id'];
$sql = "SELECT * FROM questions WHERE quiz_id = '$quiz_id'";
$result = mysqli_query($conn, $sql);

$questions = [];
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { //g et all questions
        $questions[] = $row;
    }}
?>