<?php
session_start();
?>
<html class="contact-html">
    <head>
        <link rel = "stylesheet" href = "../css/styles.css">
    </head>

    <body class="contact-body">

    <?php require_once('../backend/navbar_login.php'); ?>
      
        <main class="content">
          
        <h2 class="title animateFadein">Contact Us!</h2>
        <div class="contact-container">        
          <form class="msg-form" action = "../backend/sendcontact.php" method = "POST">
          <label>Full Name</label><br>
          <input type="text" id="fname" name="fname" placeholder="First Name" required>
          <input type="text" id="lname" name="lname" placeholder="Last Name" required><br>
          <label for="email">Email</label><br>
          <input type="text" id="email" name="email" placeholder="Email" required><br>
          <label for="msg">Your Message</label><br>
          <textarea id="msg" name="message" placeholder="Feel free to inquire us about anything." required></textarea><br><br>
          <button class="send-btn" type="submit">Send</button>
      </form>

        </div>

        </main>
        <?php require_once('../backend/footer.php'); ?>
    </body>
</html>