<?php
// config file to connect to database. used everywhere
$_username = "root";
$_password = "";
$_db = "testdb";

$conn = new mysqli("localhost", $_username, $_password, $_db);

if ($conn->connect_error) {
    die("<html>
            <head>
                <title>Connection Error</title>
            </head>
            <body>
                <h1>Connection failed: </h1>
                There was a problem with connecting to the database. The indepth error is: 
            </body>
        </html> " . $conn->connect_error);
}
?>
