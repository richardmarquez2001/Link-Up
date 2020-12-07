<?php

session_start();
$loggedinUsername = (isset($_SESSION["username"]) ? $_SESSION["username"] : ', wrong username given');

$olduname = $_POST["olduname"];
$newuname = $_POST["newuname"];
require_once('connect.php');

// checks if username matches session data (which is currently logged in user)
if ($loggedinUsername === $olduname){
    $sql = "UPDATE user_data
            SET user = '$newuname'
            WHERE user= '$olduname'"; 

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else{
        $_SESSION["username"] = $newuname;  // updates session data to be the new username
        header('location: ../pages/settings.php');
    }
}else{
    header('location: ./error.php');
}


?>