<?php 
include_once 'session.php';

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
            $hash = password_hash($password, PASSWORD_DEFAULT);
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,user_type,password) values ('$user_id','$user_name','user','$hash')";

			mysqli_query($conn, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registrace</title>
	<link rel="icon" type="image/x-icon" href="assets/img/duck-png-19.png" />
</head>
<body>

	<style type="text/css">
	
	body {
		position: relative;
  width: 100%;
  height: auto;
  min-height: 35rem;
  padding: 15rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000 100%), url("assets/img/main-bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: 100% 100%;
	}

	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: black;
		background-color: #ffe870;
		border: none;
	}

	#box{

		background-color: #4f4f4f;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<li class="nav-item"><a class="nav-link" href="index.php">Zpět na hlavní stránku</a></li>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Registrace</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Zaregistrovat"><br><br>

			<a href="login.php">Klikněte pro přihlášení</a><br><br>
		</form>
	</div>
</body>
</html>