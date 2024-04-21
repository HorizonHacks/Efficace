<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<p style='color:white; font-family: Rubik, sans-serif;margin:0;'>" . "Please enter some valid information!" . "</p>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
</head>
<body>
  <a href="main.php"><img id="logo" src="content/crop_efficace.jpg"></img></a>
<div id="box">
	<form method="post" class="boxes" style="width:25vw;height:fit-content;">
		<div style="font-family:Rubik, sans-serif;font-size:25px;color:white;">SIGNUP</div><br>
		<input class="boxes" type="text" style="display:block;height: 20px;width:calc(100% - 14px);margin-right:auto;margin-left:auto;"name="user_name" placeholder="Username"><br><br>
		<input class="boxes" type="password" name="password" style="display:block;height: 20px;width:calc(100% - 14px);margin-right:auto;margin-left:auto;" placeholder="Password"><br>

		<input style="display: block;font-family:Rubik, sans-serif; margin-left:5px;border-radius:5px; background-color: white; border-color:white; width:fit-content; height:30px;" type="submit"value="GO"><br>
		<a href="login.php" style="font-family:Rubik, sans-serif;color:white;text-decoration:none;">Login Instead -></a>
	</div>
	</form>
</body>
</html>