<!DOCTYPE html>
<html class="register-html">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link Up: Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href=" https://fonts.googleapis.com/css2?family=Poiret+One&display=swap " rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="register-bg">
    <?php require_once('../backend/navbar_login.php'); ?>

    <script>
        function validatePassword(password, confirm_password) {

            if (password.value != confirm_password.value) {
                alert("Passwords did not match.");
                return false;
            } else {
                return true;
            }
            alert("Every fillable section is verified. Taking you to the profile page.");
        }
    </script>
    <div class="register-container">
        <div class="register-body">
            <img class="login-body__image" src="../images/linkup_smlogo.png" alt="Link-Up logo small format.">
            <form class="register-form" onsubmit="return validatePassword(document.getElementById('register-body-password'), document.getElementById('register-body-confirm_password'))" action="../backend/signup.php" method="post">
                <br>
                <label class="register-body-headings">Full Name</label><br>
                <input type="text" id="register-body-fname" name="fname" placeholder="First Name" required>
                <input type="text" id="register-body-lname" name="lname" placeholder="Last Name" required>
                <br>

                <label class="register-body-headings" for="email">Email</label><br>
                <input type="text" id="register-body-email" name="email" placeholder="Email" required><br>

                <label class="register-body-headings" for="username">Username</label><br>
                <input type="text" id="register-body-username" name="username" pattern="[A-Za-z0-9]{5,}" placeholder="Username" required><br>
                <label class="register-body-desc">Letters and numbers only. No special characters. (Min. 5 characters)</label><br><br>

                <label class="register-body-headings" for="password">Password</label><br>
                <input type="password" id="register-body-password" name="password" pattern="[A-Za-z0-9]{8,}" placeholder="Password" required>
                <input type="password" id="register-body-confirm_password" name="confirmed_password" placeholder="Confirm Password" required><br>
                <label class="register-body-desc">Letters and numbers only. No special characters. (Min. 8 characters)</label><br><br>

                <p style="color: red" id="register-body-error-msg ">Error occured (Invalid username, email, or non matching passwords). Try again.</p>
                
                <a href="../pages/question.html"><button class="login-body__button"  name="submit" type="submit">Register</button></a>

                <p class="login-body__forgot">Already have an account?<a class="login-body__forgot-link" href="../pages/login.php" style="color: white" ;> Click here to login.</a></p>

            </form>

        </div>
    </div>
</body>


</html>
