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
    <body>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="insert.php">Add</a></li>
  <li><a href="delete.php">Delete</a></li>
  <li><a href="modify.php">Modify</a></li>
</ul>
        <h1>Delete From game Database</h1>
        <div align="center" id="Delete">
    <fieldset style="width:30%"><legend>Delete Product</legend>
        <form method="POST" action="del.php">
            Game ID <br><input type="text" name="d_game_id" size="40"><br>
            <input id="button" type="submit" name="submit" value="del">
        </form>
    </fieldset>
</div> 
        <table align="center" width = "400" border = "1" cellpadding="1">
            <tr>
             <td>ID</td>
             <td>Genre</td>
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