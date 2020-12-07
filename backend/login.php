<?php
session_start();
require_once 'connect.php';

if(isset($_POST['uname']) && isset($_POST['psw'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    
    $sql="SELECT * FROM `user_data` WHERE user='$username' AND pwd='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // if user exists
    if($result->num_rows > 0){
        if ($row['user'] === $username && $row['pwd'] === $password){
            $_SESSION["username"] = $row["user"];
            $_SESSION["output"] = $row["survey_result"];

            header("location: ../pages/question.html");
            exit();
        }  
    }
    else{
        //Wrong password
        header("location: ../pages/login2.php");
    }
}