<?php
session_start();
if(isset($_SESSION["username"]) === FALSE){
  header('location: ./error.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LinkUp</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link href=" https://fonts.googleapis.com/css2?family=Poiret+One&display=swap " rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="result-body">

  <?php require_once('../backend/navbar_profile.php'); ?>

  <?php
  
  require_once('../backend/connect.php');
  
  $user_querystring = $_SERVER["QUERY_STRING"];
  if ($user_querystring === "post-result"){
    require_once('../backend/submit.php');
  }

  $data = (isset($_SESSION["output"]) ? $_SESSION["output"] : "");
  $sql1 = "SELECT * FROM `user_data` WHERE survey_result='$data'";
  $result = $conn->query($sql1);

  $echostring = '<h1>Results</h1><br><br> <div class="results-container">';
  $tempcount = 0;
  $successstring = "";
  if ($result->num_rows > 0) {
    $successstring .=  '<h1>Results</h1><br><br> <div class="results-container"><h2>Your Matches</h2>
            <div class="container">';
    while ($row = $result->fetch_assoc()) {
      if ($row["user"]  != $_SESSION["username"]){ 
        $successstring .= '
                  <a href = "../pages/matcher.php?' . $row["user"] . '">
                  <div class="profile">
                      <div class="profile-pic"></div>
                      <p>Name: ' . $row["user"] . '</p>
                  </div>
                  </a>
              ';
          $tempcount += 1;
      }
    }
  } 
  
  if ($tempcount === 0){
      $echostring .= '<h2>You did not match with anyone.</h2>
        <div class="container">
      </div>
    </div>';

    echo $echostring;
  }
  else {
    echo $successstring;
    echo '   </div>
    </div>';
  }
  ?>

</body>

</html>