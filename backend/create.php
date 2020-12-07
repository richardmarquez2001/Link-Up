
<?php
// CREATES TABLE
require_once('connect.php');

$sql = "CREATE TABLE IF NOT EXISTS user_data (
    user VARCHAR(255) NOT NULL DEFAULT '',
    pwd VARCHAR(255) NOT NULL DEFAULT '',
    fullname VARCHAR(255) NOT NULL DEFAULT '', 
    email VARCHAR(255) NOT NULL DEFAULT '',

    survey_result VARCHAR(255) NOT NULL DEFAULT 'N/A' ,
    q1 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    q2 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    q3 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    q4 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    q5 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    slct1 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    slct2 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    slct3 VARCHAR(255) NOT NULL DEFAULT 'N/A',
    slct4 VARCHAR(255) NOT NULL DEFAULT 'N/A',

    matching_user1 VARCHAR(255) NOT NULL DEFAULT '',
    matching_user2 VARCHAR(255) NOT NULL DEFAULT '',
    matching_user3 VARCHAR(255) NOT NULL DEFAULT '',

    bio VARCHAR(255) NOT NULL DEFAULT '',
    interests VARCHAR(255) NOT NULL DEFAULT '',
    tiktok VARCHAR(255) NOT NULL DEFAULT 'N/A', 
    instagram VARCHAR(255) NOT NULL DEFAULT 'N/A', 
    snapchat VARCHAR(255) NOT NULL DEFAULT 'N/A', 
    twitter VARCHAR(255) NOT NULL DEFAULT 'N/A'
    );
    ";



if (mysqli_query($conn, $sql)) {
    echo "Table user_data and contact_data created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
  }

?>