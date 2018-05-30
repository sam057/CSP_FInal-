<?php
$local = "localhost";
$user = "appletable";
$pass = "Godzilla12$";
$db = "Video Games";

$conn = new mysqli($local,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>