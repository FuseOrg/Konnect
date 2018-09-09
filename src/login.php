<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Intranet for NCERC">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<title>Konnect</title>
		<link rel="stylesheet" href="../styles/login.css">
	</head>
	<body>
		<div class="nav-bar">Konnect</div>
		<main class="main">
			<div class="container">
				<form action="" method="post">
					<div class="sub-container">
						<input class="container-items" type="text" id="uname" name="username" placeholder="Username">
					</div>
					<div class="sub-container">
						<input class="container-items" type="password" id="pwd" name="password" placeholder="Password">
					</div>
					<label>
					  <?php
		                include('db_config.php');
		                if( isset($_POST["username"]) AND isset($_POST["password"]) )
		                {
                          $sql = "SELECT password FROM users where username = '".$_POST["username"]."'";
                          $result = $conn->query($sql);
                          if( $result->num_rows > 0 )
                          {
                          	$row = $result->fetch_assoc();
                          	if( $row["password"] == $_POST["password"] )
                          	{
                               header("Location: dashboard.php");
                          	}
                          	else
                          	{
                          	  echo "Incorrect password!";
                          	}
                          }
                          else
                          {
                          	echo "Fill the incomplete boxes";
                          }
		                }

		              ?>
					</label>
					<div class="button-container">
						<input type="submit" value="Login" class="button">
					</div>
				</form>
				<a class="frgt-psd" href="#">Forgot Password?</a>
			</div>
		</main>
	</body>
</html>
