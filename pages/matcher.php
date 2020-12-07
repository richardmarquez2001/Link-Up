<?php
session_start();
if(isset($_SESSION["username"]) === FALSE){
  header('location: ./error.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/styles.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Profile</title>
</head>

<body class="contentB">
  <?php require_once('../backend/navbar_profile.php'); ?>
  <section class="profileContent">
    <section class="leftBox">
      <div class="leftBoxContainer">
        <!-- <div class="item">
          <img class="pfp" src="../images/profilep1.jpg">
        </div> -->
        <div class="item">

          <?php

          require_once('../backend/connect.php');
          $user_querystring = $_SERVER["QUERY_STRING"];
          $sql = "SELECT user, fullname, bio, interests, q1, q2, q3, q4, q5, slct1, slct2, slct3, slct4, 
          tiktok, instagram, snapchat, twitter, matching_user1, matching_user2, matching_user3
          FROM user_data WHERE user='$user_querystring'";
          $result = $conn->query($sql);
          
          if ($result ->num_rows <=0){
            echo "no matches found";
          }
          else{

          $row = $result->fetch_assoc();
          $username =  $row["user"]; // replace with $_SESSION["username"]
          $fullname = $row["fullname"];

          // Profile (Personal) Data
          $bio = $row["bio"];
          $interests = $row["interests"];
          $tiktok = $row["tiktok"]; $instagram = $row["instagram"]; $snapchat = $row["snapchat"]; $twitter = $row["twitter"];
          

          // Questionarre data
          $q1 = $row["q1"]; $q2 = $row["q2"]; $q3 = $row["q3"]; $q4 = $row["q4"]; $q5 = $row["q5"];
          $slct1 = $row["slct1"]; $slct2 = $row["slct2"]; $slct3 = $row["slct3"]; $slct4 = $row["slct4"];
          
          echo "<h1 class=\"welcomeTitle\">Welcome @<span id=\"profile-username\">$username<span>!</span></h1>";

          echo '
          <hr>
        </div>
        <div class="item">
          <p><b>Name: </b> <span class="profile-name"> ' . $fullname . '</span></p>
          <p><b>My Interests: </b> <span class="profile-interests">' . $interests . '</span></p>
          <p><b>Bio: </b><span class="profile-bio">'. $bio .'</span></p>
          <section class="Title">
            <img class="item linksIcon" src="../icon/linkspfp.png" />
            <p class="links"> Links | <span class="numOfLinks">-</span></p>
          </section>
        </div>
      </div>
    </section>
    <section class="rightBox">
      <div class="rightBoxContainer">
        <div class="item">
          <div class="personalContainerNav">
            <div class="itemN" id="qProfile">
              <h1>Questionnaire</h1>
            </div>
            <div class="itemN" id="sProfile">
              <h1>Social Media</h1>
            </div>
          </div>
          <div class="personalContainer">
            <div class="questionaireContainer">
              <p><b>Sunset or Sunrise: </b><span id="profileQ1a"><br>' . $q1 . '</span></p>
              <p><b>Early Bird or Night owl: </b><span id="profileQ2a"><br>' . $q2 . '</span></p>
              <p><b>Netflix or Youtube: </b><span id="profileQ3a"><br>' . $q3 . '</span></p>
              <p><b>Introvert or Extrovert </b><span id="profileQ4a"><br> ' . $q4 . '</span></p>
              <p><b>City or Nature: </b><span id="profileQ5a"><br> ' . $q5 . ' </span></p>
              <p><b>If you could live anywhere, where would you live: </b><span id="profileQ6a"><br> ' . $slct1 . ' </span></p>
              <p><b>Which best describes your fashion style: </b><span id="profileQ7a"><br> ' . $slct2 . ' </span></p>
              <p><b>What is your favorite social media: </b><span id="profileQ8a"><br> ' . $slct3 . '</span></p>
              <p><b>What\'s your favourite music genre: </b><span id="profileQ9a"><br> ' . $slct4 . '</span></p>
            </div>
            <div class="socialMediaContainer" hidden>
              <div class="row">
                <div class="column">
                  <div class="item">
                    <div class="media"><img src="../icon/tiktok.png"></div>
                    <span class="userTiktok">'. $tiktok .'</span>
                  </div>
                </div>
                <div class="column">
                  <div class="item">
                    <div class="media"><img src="../icon/twitter.png"></div>
                    <span class="userTwitter">' . $twitter . '</span>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="column">

                  <div class="item">
                    <div class="media"><img src="../icon/instagram.png"></div>
                    <span class="userInstagram">' . $instagram . '</span>
                  </div>
                </div>
                <div class="column">

                  <div class="item">
                    <div class="media"><img src="../icon/snapchat.png"></div>
                    <span class="userSnapchat">' . $snapchat . '</span>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>';
          }
        ?>

    </section>


  </section>
  <section class="profileMobileView" hidden>
    <div class="leftBoxContainer">
      <div class="item">
        <img class="pfp" src="../images/profilep1.jpg">
      </div>
      <div class="item">
        <h1 class="welcomeTitle">Welcome @<span id="profile-username">toyvan<span>!</span></h1>
        <hr>
      </div>
      <div class="item">
        <p><b>Name: </b> <span class="profile-name">Vanessa</span></p>
        <p><b>My Interests: </b> <span class="profile-interests">Fashion, Coding, Design</span></p>
        <p><b>Bio: </b><span class="profile-bio">Did you know that i’ma design God! </span></p>
        <section class="Title">
          <img class="item linksIcon" src="../icon/linkspfp.png" />
          <p class="item links"> Links | <span class="numOfLinks">-</span></p>
        </section>
      </div>
      <hr>
      <h1>Social Media</h1>
      <div class="item">
        <div class="media">Tiktok</div>
        <span class="userTiktok hideSocial">@tiktok</span>
      </div>
      <div class="item">
        <div class="media">Twitter</div>
        <span class="userTwitter hideSocial">@tweet</span>
      </div>
      <div class="item">
        <div class="media">Instgram</div>
        <span class="userInstagram hideSocial">@instagram</span>
      </div>

      <div class="item">
        <div class="media">Snapchat</div>
        <span class="userSnapchat hideSocial "> @snapchat</span>
      </div>

    </div>

    </div>
    </div>
  </section>

  </section>
  <script src="../scripts/profile.js" />
  </script>

</body>

</html>