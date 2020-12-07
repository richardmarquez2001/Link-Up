<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Features</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body class="content">
    <?php require_once('../backend/navbar_login.php'); ?>

    <h1 class="title animateFadein">The Team</h1>

    <section class="main" id="main">
      <div class="featureContents">
        <div class="item" id="f1">
          <img src="../images/vanessa.jpg"/>
          <p class="ft">Vanessa Hoang</p>
          <div class="itemf2">
            I chose to study Computer Science because I find fulfillment in creating projects and this field allows me to combine my passion for technology and design. In my free time, I like to explore a variety of creative outlets and express myself through different mediums of art such as photography and digital art.
          </div>
          <div class="teamInfoText">
          <div class="itemf1">
          <img class="teamIcons" src ="../icon/github.png"><br> <a href="https://github.com/vanessah9" target="_blank">vanessah9</a>
          </div><div class="itemf1">
          <img class="teamIcons" src ="../icon/linkedin.png"> <br> <a href="https://www.linkedin.com/in/vanessahoang9/" target="_blank">vanessa-hoang</a>
          </div>

        </div>
      </div>
        <div class="item" id="f2">
          <img src="../images/ethan.jpg"/>
          <p class="ft">Ethan Hou</p>
          <div class="itemf2">
            I'm a second-year Computer Science Co-op student at Ryerson University. I am currently seeking potential internship positions for Front-End and Back-End Development.
            During my free time, I love to hang out with friends, work on side projects, play basketball, and play video games.
          </div>
          <div class="teamInfoText">
            <div class="itemf1">
            <img class="teamIcons" src ="../icon/github.png"> <br> <a href="https://github.com/ethan-hou" target="_blank">ethan-hou</a>
            </div>
            <div class="itemf1">
            <img class="teamIcons" src ="../icon/linkedin.png"><br>  <a href="https://www.linkedin.com/in/ethanykhou/" target="_blank">ethan-hou</a>
            </div>
          </div>

        </div>
        <div class="item" id="f3">
          <img src="../images/deandra.jpg"/>
          <p  class="ft">Deandra Spike-Madden</p>
          <div class="itemf2">
          Hello! My name is Deandra and I am an undergraduate student at Ryerson University. I spend my free time chatting with friends, learning new languages, and working on side projects. I hope we can collaborate in the future. 
          </div>
          <div class="teamInfoText">
              <div class="itemf1">
            <img class="teamIcons" src ="../icon/github.png"><br>  <a href="https://github.com/xvxvdee" target="_blank">xvxvdee </a>
              </div>
              <div class="itemf1">
            <img class="teamIcons" src ="../icon/linkedin.png"><br>  <a href="https://www.linkedin.com/in/deandra-spike-madden" target="_blank">deandra-spike-madden</a>
                </div>
              
          </div>

        </div>
        <div class="item" id="f4">
          <img src="../images/richard.jpg"/>
          <p  class="ft">Richard Marquez</p>
          <div class="itemf2">
            I'm a second-year Computer Science Co-op student seeking Summer 2021 Internship Positions for Back-End Development, and general Software Development. My go-to languages are Python, Java, and JavaScript. 
            </div>
          <div class="teamInfoText">
           <div class="itemf1">
            <img class="teamIcons" src ="../icon/github.png"> <a href="https://github.com/richardmarquez2001" target="_blank">richardmarquez2001</a>
          </div>
          <div class="itemf1">
            <img class="teamIcons" src ="../icon/linkedin.png"><br> <a href="https://www.linkedin.com/in/richard-marquez-2001" target="_blank">richard-marquez</a>
          </div>
          </div>

        </div>
      </div>
      </div>

    </section>
    <section class="MobileView">
      <div class="featureInfo item">
        <img src="../images/vanessa.jpg"/>
        <p class="ft">Vanessa Hoang</p>
        <p class="featureText">
          I chose to study Computer Science because I find fulfillment in creating projects and this field allows me to combine my passion for technology and design. In my free time, I like to explore a variety of creative outlets and express myself through different mediums of art such as photography and digital art.
        </p>
        <div class="teamInfoText">
          <a href="https://github.com/vanessah9" target="_blank"> <img class="teamIcons" src ="../icon/github.png"></a>
           <a  href="https://www.linkedin.com/in/vanessahoang9/" target="_blank"><img class="teamIcons" src ="../icon/linkedin.png"></a>
         </div>
      </div>
      <hr>
      <div class="featureInfo item">
        <img src="../images/ethan.jpg"/>
        <p class="ft">Ethan Hou</p>
        <p class="featureText">
          My name is Ethan Hou, I enjoy playing basketball. I'm also Immortal in Valorant.
        </p>
        <div class="teamInfoText">
          <a href="https://github.com/ethan-hou" target="_blank"><img class="teamIcons" src ="../icon/github.png"></a>
          <a href="https://www.linkedin.com/in/ethanykhou/" target="_blank"><img class="teamIcons" src ="../icon/linkedin.png"></a>
        </div>
      </div>
      <hr>
      <div class="featureInfo item">
        <img src="../images/deandra.jpg"/>
        <p  class="ft">Deandra Spike-Madden</p>
        <p class="featureText">
          Hello! My name is Deandra and I am an undergraduate student at Ryerson University. I spend my free time chatting with friends, learning new languages, and working on side projects. I hope we can collaborate in the future. 
        </p>
        <div class="teamInfoText">
        
        <a href="https://github.com/xvxvdee" target="_blank"><img class="teamIcons" src ="../icon/github.png"></a>
        <a href="https://www.linkedin.com/in/deandra-spike-madden" target="_blank"> <img class="teamIcons" src ="../icon/linkedin.png"></a>
      </div>
      </div>
      <hr>
      <div class="featureInfo item">
        <img src="../images/richard.jpg"/>
        <p  class="ft">Richard Marquez</p>        
        <p class="featureText">
          I'm a second-year Computer Science Co-op student seeking Summer 2021 Internship Positions for Back-End Development, and general Software Development. My go-to languages are Python, Java, and JavaScript. 
        </p>
        <div class="teamInfoText">
          <a href="https://github.com/richardmarquez2001" target="_blank"><img class="teamIcons" src ="../icon/github.png"> </a>
        
        <a href="https://www.linkedin.com/in/richard-marquez-2001" target="_blank"> <img class="teamIcons" src ="../icon/linkedin.png"></a>
        </div>
      </div>
      <?php require_once('../backend/footer.php'); ?>
    <script src="../scripts/features.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    
  </body>
</html>
