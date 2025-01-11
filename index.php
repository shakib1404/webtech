<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>

        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="login"><br>
    </form>



</body>

</html>


<?php
  echo "{$_POST["username"]} <br>";
  echo "{$_POST["password"]}<br>";
?>