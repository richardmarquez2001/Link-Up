<?php

session_start();
$loggedinUsername = (isset($_SESSION["username"]) ? $_SESSION["username"] : ', wrong username given');

$olduname = $_POST["olduname"];
$newuname = $_POST["newuname"];
require_once('connect.php');

$sql="SELECT * FROM `user_data` WHERE user='$newuname'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    
if($result->num_rows > 0){
    header("location: ../pages/settings.php");
}
else{
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
        header('location: ../pages/error.php');
}
}




?>