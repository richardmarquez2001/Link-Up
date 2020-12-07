<?php

session_start();
$loggedinUsername = (isset($_SESSION["username"]) ? $_SESSION["username"] : ', wrong username given');

$name = $_POST["name"];
$about = $_POST["about"];
$interests =$_POST["interests"];

require_once('connect.php');

// checks when session is valid 
if (isset($_SESSION["username"])){
    $sql = "UPDATE user_data
            SET fullname = '$name', bio = '$about', interests= '$interests'
            WHERE user= '$loggedinUsername'"; 

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // on success 
    header('location: ../pages/settings.php');
}else{
    header('location: ./error.php'); 
}


?>