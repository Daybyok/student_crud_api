<?php
header("Content-Type: application/json");
include "../config/database.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

$students = [];

while ($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}

echo json_encode($students);
?>