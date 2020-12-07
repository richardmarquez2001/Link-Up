<?php


session_start();
$loggedinUsername = (isset($_SESSION["username"]) ? $_SESSION["username"] : ', wrong username given');

$tiktok = $_POST["tiktok"];
$instagram = $_POST["instagram"];
$twitter = $_POST["twitter"];
$snapchat = $_POST["snapchat"];

require_once('connect.php');

// checks if session is valid
if (isset($_SESSION["username"])){
    $sql = "UPDATE user_data
            SET tiktok = '$tiktok', instagram = '$instagram', twitter= '$twitter', snapchat = '$snapchat'   
            WHERE user= '$loggedinUsername'"; 
    
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    header('location: ../pages/settings.php');
}else{
    header('location: ..pages/error.php');
}


?>