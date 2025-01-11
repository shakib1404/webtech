<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="login.php" method="POST">
        <label >username:</label><br>
        <input type="text" name="username"><br>
        <label >password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">




    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="login.php" method="post">

   <!-- <input type="radio" value="visa" name="1">visa<br>
   <input type="radio" value="mastercard" name="1">mastercard<br>
   <input type="radio" value="american Express" name="1">american express<br>
   <input type="submit" name="confirm" value="confirm"> -->

   <input type="checkbox" value="pizza" name="pizza">Pizza<br>
   <input type="checkbox" value="pizza" name="pizza">Burger<br>
   <input type="checkbox" value="pizza" name="pizza">Sandwitch<br>
   <input type="checkbox" value="pizza" name="pizza">Porota<br>
   <input type="submit" name="confirm" value="confirm">

   </form> 
</body>
</html>



<?php

// 
// if(isset($_POST["login"]))
// {
//     echo "You tried to login";
// }

// if(isset($_POST["confirm"])){
//     $creditcard=$_POST["1"];
//     echo $creditcard;
// }
// if(isset($_POST["confirm"])){
//     echo "you have not selected yet";
// }

function happy_birthday()
{
    echo "hello in the world";
}

happy_birthday();

$username="Shakib    ";
echo "{$username}<br>"; 

$username= strtoupper($username);
echo "{$username}<br>"; 

$username= strtolower($username);


echo "{$username}<br>"; 

$username= trim($username);
echo "{$username}<br>"; 

$username= str_pad($username,20,"0");
echo "{$username}<br>"; 
//str_replace()
//strcmp()
//strlen()
//strpos()
//substr()
$username="md shakibul islam shakib";
$fullname= explode(" ",$username);

foreach($fullname as $name)
{
    echo "{$name} </br>";
}

$fullname= implode(" ",$fullname);
echo $fullname;

//$username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS)

?>
