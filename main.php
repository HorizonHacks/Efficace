<?php  
session_start();

  include("connection.php");
  include("functions.php");
?>


<!DOCTYPE html>
<html style="overflow-x: hidden;
  overflow-y: hidden;height:300%;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Efficace</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
  <video autoplay muted loop id="myVideo">
    <source src="content/discussion.mp4" type="video/mp4">
  </video>
  <a href="main.php"><img id="logo" src="content/crop_efficace.jpg"></img></a>
  <!-- <?php echo "<h2 style='color:white; font-family: Rubik, sans-serif;margin:0;'>" . "Welcome, " . $user_data['user_name'] . "</h2>"; ?> -->
  <h2 id="header" style="margin-top: 20px;">YOUR PATH TO POLITICAL CHANGE</h2>
  <h3 class="home_link"><a href="#about" style="text-decoration:none;color:white;margin-top:0px;"><div class="back">About -></h3></a></div>
  <h3 class="home_link"><a href="index.php" style="text-decoration:none;color:white;"><div class="back">Your Agenda -></h3></a></div>

  <section id="about">
    <h2 style="position:relative;margin-top:50%;text-decoration:none;margin-bottom:0px;"><a href="#logo" style="text-decoration:none;color:white;">ABOUT ^</h2></a>
    <h3 style="margin-left:0px;">Our mission is to promote political efficacy: the belief that one's vote matters. Today, much of the US population is discouraged from voting: they don't see the purpose of losing important work time to vote for something they know little about. EFFICACE aims for people to track their viewpoints towards issues and be better informed of countless political endeavours. From this, voter turnout will hopefully increase, with those voting having a better idea of their political stance.</h3>
    <h2 style="margin-bottom:0px;">Learn & Advocate</h2>
    <h3 style="margin-left:0px;">Learn about current issues, the political system, and especially that in the end, the choice is YOURS. By signing up, you'll be encouraged to learn more about our country and yourself, in addition to advocating for what is right.</h3>
  </section>
  <!-- <a href="login.php" style="text-decoration:none;"><h3 class="home_link">Login/out -></h3></a> -->
  <script src="script.js"></script>
  <!-- <a href="logout.php" style="color:white;">Logout</a> -->
</body>
</html>
