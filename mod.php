<?php
require('connect.php');
$game_id = $_POST["m_game_id"];
$name = $_POST["m_name"];
$genre = $_POST["m_genre"];
$currentName = "SELECT name FROM games WHERE game_id='".$game_id."'";
$currentGenre ="SELECT genre FROM games WHERE game_id='".$game_id."'";
if (empty($name)) {
    $name = $currentName;
}
if (empty($genre)) {
    $genre = $currentgenre;
}
$sql = "UPDATE games SET name = '".$name."' WHERE game_id='".$game_id."'";
$sql2 = "UPDATE games SET genre = '".$genre."' WHERE game_id='".$game_id."'";
$result1 = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);
 echo "<script> location.href='index.php'; </script>";
?>

