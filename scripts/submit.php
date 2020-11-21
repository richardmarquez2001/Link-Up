<?php

$data = $_POST;

$cars = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"]);
$output = implode("", $cars);
echo $output;

$servername = "localhost";
$database = "id15405978_linkupdata_name";
$username = "id15405978_linkupdata_username";
$password = "0P=UK</78kj@We+";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("<h1>Connection failed: </h1>" . $conn->connect_error);
}
echo "Connected successfully";
?>