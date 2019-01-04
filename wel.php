<?php

$name = $_POST["username"];
$pass = $_POST["pwd"];

if ($name == "admin" && $pass == "password"){
    echo "welcome ".$name;
    echo '<a href="so.php" >Log out</a>';
}else{
    header("Location: so.php?logged=false"); /* Redirect browser */
    exit();
}

