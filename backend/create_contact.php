
<?php
/**
 * CODE USED TO INTIALIZE DATABASE. ONLY USED ONCE UPON STARTUP
 */
require_once('connect.php');

$sql = "CREATE TABLE IF NOT EXISTS contact_data (
    fullname VARCHAR(255) NOT NULL DEFAULT '', 
    email VARCHAR(255) NOT NULL DEFAULT '',
    yourmessage VARCHAR(255) NOT NULL DEFAULT ''
);
    ";
if (mysqli_query($conn, $sql)) {
    echo "Table contact_data created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
  }

?>
