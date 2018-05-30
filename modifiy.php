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
        <h1>Insert Into Game Database</h1>
        <div align="center" id="Add">
    <fieldset style="width:30%"><legend>Add Product</legend>
        <form method="POST" action="add.php">
            Game Name <br><input type="text" name="a_name" size="40"><br>
            Game ID <br><input type="text" name="a_game_id" size="40"><br>
            Genre <br><input type="text" name="a_genre" size="40"><br>
            <input id="button" type="submit" name="submit" value="Add">
        </form>
    </fieldset>
</div> 
        <table align="center" width = "280" border = "1" cellpadding="1">
            <tr>
             <td>ID</td>
             <td>Genres</td>
            </tr>
        <?php
        while($games = $result -> fetch_assoc()) {
        echo"<tr>";
            echo"<td>".$games ['game_id']."</td>";
            echo"<td>".$games ['genre']."</td>";
            echo"<td>".$games ['name']."</td>";
        echo"</tr>";
        }
        ?>
        </table>
    </body>
</html>