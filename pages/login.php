<?php
session_start();
if(isset($_SESSION["username"])){
  header('location: ./profile.php');
} 
?>
<html class="login-html">

<head>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/styles.css" />
        <title>Login</title>
    </head>
</head>

<body class="login-bg">
<?php require_once('../backend/navbar_login.php'); ?>

    <!-- <div class="login-img">
    <img src="../images/authen-ication.png">
  </div> -->
    <div class="login-body">
        <img class="login-body__image" src="../images/linkup_smlogo.png" alt="Link-Up logo small format.">
        <form action="../backend/login.php" method="post">

            <input class="login-body__info" type="text" placeholder="Enter Username" name="uname" required>
            <br>

            <input class="login-body__info" type="password" placeholder="Enter Password" name="psw" required>
            <br>
            <button class="login-body__button" type="submit"><a class="login-body__link" href="login.php">Login</a></button>
            <!-- <button class="login-body__button" type="submit"><a class="login-body__link" href="signup.html">Register</a></button> -->
            <p class="login-body__forgot">Don't have an account? <a class="login-body__forgot-link" href="../pages/signup.php">Click here to register.</a></p>
        </form>
                            
    </div>
    
</body>

</html>