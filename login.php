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
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";

				$result = mysqli_query($con, $query);

			mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			"<p style='color:white; font-family: Rubik, sans-serif;margin:0;'>" . "Wrong username or password." . "</p>";
		}else
		{
			echo "<p style='color:white; font-family: Rubik, sans-serif;margin:0;'>" . "Please enter some valid information!" . "</p>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <a href="main.php"><img id="logo" src="content/crop_efficace.jpg"></img></a>
<div id="box">
	<form method="post" class="boxes" style="width:25vw;height:fit-content;">
		<div style="font-family:Rubik, sans-serif;font-size:25px;color:white;">LOGIN</div><br>
		<input class="boxes" type="text" style="display:block;height: 20px;width:calc(100% - 14px);margin-right:auto;margin-left:auto;"name="user_name" placeholder="Username"><br><br>
		<input class="boxes" type="password" name="password" style="display:block;height: 20px;width:calc(100% - 14px);margin-right:auto;margin-left:auto;" placeholder="Password"><br>

		<input style="display: block; font-family:Rubik, sans-serif;margin-left:5px;border-radius:5px; background-color: white; border-color:white; width:fit-content; height:30px;" type="submit"value="GO"><br>
		<a href="signup.php" style="font-family:Rubik, sans-serif;color:white;text-decoration:none;">Signup Instead -></a>
	</div>
	</form>
</body>
</html>