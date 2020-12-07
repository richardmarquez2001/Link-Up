<?php

session_start();
if(isset($_SESSION["username"]) === FALSE){ header('location: ./error.php'); }
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : 'none';
?>
<!DOCTYPE html>
<html lang="en">
  <!-- TODO: add rest of pages from settings-forms, work on styling/responsiveness on this -->
  <head>
    <title>Settings</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css" />
  </head>

<body class="settings">
    <?php require_once('../backend/navbar_profile.php'); ?>
    <!-- Container for Setting Content -->
    <article class="s-container">
      <div>
        <!-- Container for Setting Options -->
        <section id="options">
          <!-- Change username -->
          <div class="buttons itemO">
            <button id="_username" class="item" type="button">
              Change Username
            </button>
          </div>
          
          <form action = "../backend/changeUsername.php" method = "POST">
            <div class="box" id="choiceUsername">
              <h1>Changing Username</h1>
              <div class="inputPosition">
                <label class="item">Current Username </label>
                <input name = "olduname" class="item2" id="old_username" /><br />
              </div>
              <div class="inputPosition">
                <label class="item">New Username </label>
                <input name = "newuname" class="item2" id="new_username" />
              </div>
              <button class="item" type="submit" id="change">CHANGE</button>
            </div>
          </form>

          <!-- Change password -->
         
          <div class="buttons itemO">
            <span class="color" id="b2"> </span>
            <button id="_password" type="button">Change Password</button>
          </div>

          <form action = "../backend/changePassword.php" method = "POST">
          <div class="box" id="choicePassword">
            <h1>Change Password (Logged in as <?php echo $username; ?>)</h1>
            <div class="inputPosition">
              <label class="item">Current Password </label>
              <input name = "oldpassword" class="item2" id="old_password" /><br />
            </div>
            <div class="inputPosition">
              <label class="item">New password </label>
              <input name = "newpassword" class="item2" id="new_password" />
            </div>
            <button class="item" type="submit" id="change">CHANGE</button>
          </div>
          </form>


          <!-- Update Social Medias Available your Profile  -->
          <div class="buttons itemO">
            <span class="color" id="b3"> </span>
            <button id="_socials" type="button">Update Social Media </button>
          </div>

          <form action = "../backend/changeSocialMedia.php" method = "POST">
          <div class="box" id="choiceSocials">
            <h1>Update Social Media (Logged in as <?php echo $username; ?>)</h1>
            <div class="inputPosition">
              <label class="item">Tiktok </label>
              <input name = "tiktok" class="item2" id="change_tiktok"/><br />
            </div>
            <div class="inputPosition">
              <label class="item">Instagram </label>
              <input name = "instagram" class="item2" id="change_instagram"/><br />
            </div>
            <div class="inputPosition">
              <label class="item">Twitter </label>
              <input name = "twitter" class="item2" id="change_twitter"/><br />
            </div>
            <div class="inputPosition">
              <label class="item">Snapchat </label>
              <input name = "snapchat" class="item2" id="change_snapchat"/><br />
            </div>
            <button class="item" type="submit" id="change">CHANGE</button>
          </div>
          </form>


          <!-- Update Interest, Bio, and Name -->
          <div class="buttons itemO">
            <span class="color" id="b4"> </span>
            <button id="Interests_bio_name" type="button">
              About You 
            </button>
          </div>

          <form action = "../backend/changeAbout.php" method = "POST">
          <div class="box" id="choiceInterests">
            <h1>Information (Logged in as <?php echo $username; ?>)</h1>
            <div class="inputPosition">
              <label class="item">Name</label>
              <input name = "name" class="item2" id="change_Name"/><br />
            </div>
            <div class="inputPosition">
              <label class="item">Interests </label>
              <input name = "interests" class="item2" id="change_interest"/><br />
            </div>
            <div class="inputPosition">
              <label class="item">About </label>
              <input name = "about" class="item2" id="change_bio"/><br />
            </div>
            <button class="item" type="submit" id="change">CHANGE</button>
          </div> 
          </form>

          <div class="buttons itemO">
            <span class="color" id="b6"> </span>
            <button id="_deleteAccount" type="button">Delete Account </button>
          </div>

          <!-- Delete your account -->
          <form action = "../backend/deleteAccount.php" method = "POST">
          <div class="box" id="choiceDelete">
            <h1>Delete Account (Logged in as <?php echo $username; ?>)</h1>
            <div class="removeLink">
              <label>Please type in your password</label><br>
              <input name = "passwordval" id="delete_account"/>
            </div>
            <button class="item" type="submit" id="change">DELETE</button>
          </div>
          </form>
        </section>
      </div>
    </article>
    <script src="../scripts/settings.js"></script>
</body>

</html>