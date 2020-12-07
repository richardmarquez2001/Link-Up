<?php
require_once 'connect.php';

if (isset($_POST["submit"])) {
    // GETS DATA
    $fullname = $_POST['fname'] . " " . $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sqlCheck = "SELECT * FROM `user_data` WHERE `email` = '$email' OR `user` = '$username'";
    $result = $conn->query($sqlCheck);

    // IF USER DOESNT EXIST -> CREATE NEW USER
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO `user_data` (`user`, `pwd`, `fullname`, `email`, `survey_result`, `q1`, `q2`, `q3`, `q4`, `q5`, `slct1`, `slct2`, `slct3`, `slct4`, `matching_user1`, `matching_user2`, `matching_user3`, `bio`, `interests`, `tiktok`, `instagram`, `snapchat`, `twitter`) 
    VALUES ('$username', '$password', '$fullname', '$email', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', '', '', '', '', 'N/A', 'N/A', 'N/A', 'N/A');";
        if ($conn->query($sql) === TRUE) {
            header("location: ../pages/login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    } else {
        // IF USER EXISTS
        header("location: ../pages/signup2.php");
    }
}