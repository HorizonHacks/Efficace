<?php  
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html style="height:100%;overflow-x: hidden;
  overflow-y: auto;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Efficace</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
</head>

<body>
  <a href="main.php"><img id="logo" src="content/crop_efficace.jpg"></img></a>
	<?php echo "<h2 style='color:white; font-family: Rubik, sans-serif;margin:0;'>" . "Welcome, " . $user_data['user_name'] . "</h2>"; ?>
	<a href="logout.php" style="color:white;font-family: Rubik, sans-serif;text-decoration:none;">Logout</a>
  <div id="party" style="width:fit-content;"class="boxes">MAIN IDEOLOGY:&nbsp<input id="main_ideology" class="boxes"type="text" style="margin-right: 5px;" placeholder="Liberal, Conservative, etc."></input></div>
  <div id="ideology" style="height:fit-content;"class="boxes">IDEOLOGY<div id="add_idea" class="boxes" style="cursor:pointer;margin-left:5px;"onclick="add_idea()">ADD</div>
  </div>
  <script src="script.js"></script>
</body>
</html>
