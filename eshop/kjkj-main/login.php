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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_type'] = $user_data['user_type'];
						$_SESSION['user_id'] = $user_data['user_id'];
						

						if ($_SESSION['user_type'] == "admin") {
							header('Location: admin.php');
							exit();
						} else {
							header('Location: index.php');
							exit();
						}
					}
					

				}
			}
			
			echo "Špatné jméno nebo heslo!";
		}else
		{
			echo "Špatné jméno nebo heslo!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Přihlášení</title>
	<link rel="icon" type="image/x-icon" href="assets/img/duck-png-19.png" />
	<link href="css/styles.css" rel="stylesheet" />
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
  background-size: 100% 150%;
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
			<div style="font-size: 20px;margin: 10px;color: white;">Přihlášení</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Přihlásit se"><br><br>

			<a href="signup.php">Nemáte účet? Zaregistrujte se</a><br><br>
		</form>
	</div>
</body>
</html>