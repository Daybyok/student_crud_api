<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include "../config/database.php";

$name   = $_POST["name"];
$course = $_POST["course"];
$age    = $_POST["age"];

$sql = "INSERT INTO students (name, course, age) VALUES ('$name', '$course', '$age')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(["message" => "Student Created Successfully"]);
} else {
    echo json_encode(["error" => mysqli_error($conn)]);
}
?>