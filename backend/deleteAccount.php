<?php

session_start();
$loggedinUsername = (isset($_SESSION["username"]) ? $_SESSION["username"] : ', wrong username given');

$oldpassword = $_POST["passwordval"];
require_once('connect.php');

if (isset($_SESSION["username"])){
    $data = "SELECT pwd FROM user_data WHERE user = '$loggedinUsername'";
    $result = $conn->query($data);
    $row = $result->fetch_assoc();

    if ($row["pwd"] === $oldpassword){
        $sql = "DELETE FROM user_data
                WHERE user= '$loggedinUsername'";
        
        if ($conn->query($sql) === TRUE) {
            header('location: ./logout.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }else{
        echo "not valid passwrd";
    }

}else{
    echo 'not reached $loggedinUsername';
}

// header('location: ../pages/settings.php');
?>