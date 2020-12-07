<?php
require_once('connect.php');

$sql = "INSERT INTO `contact_data` (`fullname`, `email`, `yourmessage`) VALUES (' " . $_POST["fname"] . " " . $_POST["lname"] . "' , '" .   $_POST["email"] . "' , '" .   $_POST["message"] . 
        "');";    

if ($conn->query($sql) === FALSE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header( "Location: ../" );

?>