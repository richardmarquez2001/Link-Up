<?php

session_start();
$loggedinUsername = (isset($_SESSION["username"]) ? $_SESSION["username"] : ', wrong username given');

$oldpassword = $_POST["oldpassword"];
$newpassword = $_POST["newpassword"];
require_once('connect.php');

// checks if sesssion is valid
if (isset($_SESSION["username"])){
    $data = "SELECT pwd FROM user_data WHERE user = '$loggedinUsername'";
    $result = $conn->query($data);
    $row = $result->fetch_assoc();

    // changes password
    if ($row["pwd"] === $oldpassword){
        $sql = "UPDATE user_data
                SET pwd = '$newpassword'
                WHERE user= '$loggedinUsername'";
        
        if ($conn->query($sql) === TRUE) {
            header('location: ../pages/settings.php');
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header('location: ./error.php'); 
        }
    }else{
        header('location: ../pages/settings.php');
    }

}else{
    echo 'not reached $loggedinUsername';
}

// header('location: ../pages/settings.php');
?>