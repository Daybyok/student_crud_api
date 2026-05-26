<?php
header("Content-Type: application/json");
include "../config/database.php";

$id = $_POST["id"];

$sql = "DELETE FROM students WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo json_encode(["message" => "Deleted Successfully"]);
} else {
    echo json_encode(["error" => mysqli_error($conn)]);
}
?>