<?php
require('connect.php');
$name = $_POST["a_name"];
$game_id = $_POST["a_game_id"];
$genre = $_POST["a_genre"];
$sql = "INSERT INTO games(name, genre, game_id) VALUES('".$name."','".$genre."', '".$game_id."')";
$result = mysqli_query($conn,$sql);
 echo "<script> location.href='index.php'; </script>";
?>