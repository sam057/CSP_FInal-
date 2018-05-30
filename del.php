<?php
require('connect.php');
$id = $_POST["d_game_id"];
$sql = "DELETE FROM games WHERE game_id='".$id."'";
$sql2 = "ALTER TABLE games AUTO_INCREMENT=$id;";
$result1 = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);
 echo "<script> location.href='index.php'; </script>";
?>
