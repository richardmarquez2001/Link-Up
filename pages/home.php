<?php
session_start();
$isLoggedIn = (isset($_SESSION["username"]) ? 'true' : 'false');
?>
<!DOCTYPE html>
<html lang="en">

<head class="home-html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkUp</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href=" https://fonts.googleapis.com/css2?family=Poiret+One&display=swap " rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="home-body">

    <header class="header">
        <a href="./home.php" class="logo"><img src="../images/logoG2.png" alt=""></a>

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">

            <li class="link"><a href="./home.php" class="link">Home</a></li>
            <li class="link"><a href="./about.php" class="link">About</a></li>
            <li class="link"><a href="./features.php" class="link">Team</a></li>
            <li class="link"><a href="./contact.php" class="link">Contact</a></li>
        </ul>
        </ul>
    </header>
    <div class="home-container">

        <div class="home-left">
    
            <div class="text">
                <img class="home-left-logo" src="../images/linkup_smlogo.png" alt="">
                <h1>Wanna Link Up?</h1>
            </div>

            <?php
            if ($isLoggedIn === "true") {
                $uname = $_SESSION["username"];
                echo '
                    <div class="button">
                    <a href="../pages/profile.php"><button class="btn btn1">Go to ' . $uname . '</button></a>
                </div>';
            } else {
                echo '
                <div class="button">
                <a href="../pages/login.php"><button class="btn btn1">Login</button></a>
                <a href="../pages/signup.php"><button class="btn btn2">Register</button></a>
    
                </div>';
            }
            ?>

        </div>


    </div>


</body>

</html>