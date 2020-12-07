<?php
$name = (isset($_SESSION["username"]) ? $_SESSION["username"] : 'Login');
$endpoint = (isset($_SESSION["username"]) ? './profile.php' : './login.php');

echo '
<nav class="headerOther">
      <header class="header ">
        <a href="./home.php" class="logo"
          ><img src="../images/logoG2.png" alt=""/></a>

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li class="link"><a href="./home.php" class="link">Home</a></li>
          <li class="link"><a href="./about.php" class="link">About</a></li>
          <li class="link"><a href="./features.php" class="link">Team</a></li>
          <li class="link"><a href="./contact.php" class="link">Contact</a></li>
          <li class="link"><a href="'. $endpoint . '" class="link">' . $name . '</a></li>
        </ul>
      </header>
  </nav>
';
?>