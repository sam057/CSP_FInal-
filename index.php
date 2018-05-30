<?php
require('connect.php');
$sql = "SELECT game_id, name, genre FROM games";
$result = $conn->query($sql);
?>
<html>
    <head>
         <link rel="stylesheet" href="design.css">
        <title>Webpage</title>
    </head>
    <body onload="startTime()">
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="insert.php">Add</a></li>
  <li><a href="delete.php">Delete</a></li>
 <li><a href="modify.php">Modify</a></li>
</ul>
<br>
    <div align="center" id="txt"></div>
        <h1>Welcome to the website!</h1>
        <p>This page shows you all of the games you've played. </p>
        <table align="center" width = "600" border = "1" cellpadding="1">
            <tr>
             <td>ID</td>
             <td>Games</td>
             <td>Genres</td>
            </tr>
        <?php
        while($games = $result -> fetch_assoc()) {
        echo"<tr>";
            echo"<td>".$games ['game_id']."</td>";
            echo"<td>".$games ['name']."</td>";
            echo"<td>".$games ['genre']."</td>";
        echo"</tr>";
        }
        ?>
        </table>
    </body>
</html>