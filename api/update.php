<?php
header("Content-Type: application/json");
include "../config/database.php";

$id     = $_POST["id"];
$name   = $_POST["name"];
$course = $_POST["course"];
$age    = $_POST["age"];

$sql = "UPDATE students SET name='$name', course='$course', age='$age' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo json_encode(["message" => "Updated Successfully"]);
} else {
    echo json_encode(["error" => mysqli_error($conn)]);
}
?>