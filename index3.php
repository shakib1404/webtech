<?php
include("database.php");

$sql= "SELECT * FROM users WHERE user='shakib'";
 $result=mysqli_query($conn,$sql);

 if(mysqli_num_rows($result)>0){
    while( mysqli_fetch_assoc($result)){
    echo $row["id"]."<br>";
    echo $row["user"]."<br>";
    echo $row["register_date"]."<br>";

    };
    
 }

 else{
    echo "No user found";
 }



mysqli_close($conn);

?>