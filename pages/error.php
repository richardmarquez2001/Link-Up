<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page Not Found</title>
    <link rel = "stylesheet" href = "../css/styles.css">

</head>
<body> 
    <!--Navigation Bar-->
    <?php require_once('../backend/navbar_login.php'); ?>
    <!--Image of error-->
    <main class="error-content"> 
        <img class="errorImage" src="../images/404Error.png" alt ="404 Error">
    </main>
</body>
</html>