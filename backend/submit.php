<?php

require_once('connect.php');

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$slct1 =$_POST["slct-1"];
$slct2 =$_POST["slct-2"];
$slct3 =$_POST["slct-3"];
$slct4 =$_POST["slct-4"];

$cars = array(
    $_POST["q1"],
    $_POST["q2"],
    $_POST["q3"],
    $_POST["q4"],
    $_POST["slct-1"],
    $_POST["slct-2"],
    $_POST["slct-3"],
    $_POST["slct-4"]
);
$output = implode("", $cars);
$uname = $_SESSION["username"];

$sql = "UPDATE user_data
        SET survey_result = '$output', q1 = '$q1', q2 = '$q2', q3 = '$q3', q4 = '$q4', q5 = '$q5', slct1 = '$slct1', slct2 = '$slct2', slct3 = '$slct3', slct4 = '$slct4'  
        WHERE user= '$uname' "; // should be $_SESSION["username"];

$_SESSION["output"] = $output;
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
