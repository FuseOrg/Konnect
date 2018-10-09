<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Intranet for NCERC">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Konnect | Sign Up</title>
	<meta name="theme-color" content="#fff">
	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Konnect">
	<link rel="icon" sizes="192x192" href="../../images/android-desktop.png">
	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Konnect">
	<link rel="apple-touch-icon-precomposed" href="../../images/ios-desktop.png">
	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="../../images/ios-desktop.png">
	<meta name="msapplication-TileColor" content="#fff">
	<link rel="shortcut icon" href="../../images/favicon.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Product+Sans">
	<link rel="stylesheet" href="../../styles/index.css">
</head>

<body>
	<main class="main">
		<div class="logo">Konnect</div>
		<div class="container">
			<div class="content">
				<form action="" method="post">
					<input class="input" type="text" id="fname" name="fname" placeholder="name" required>
					<input class="input" type="email" id="fname" name="email" placeholder="email" required>
					<input class="input" type="text" id="uname" name="uname" placeholder="username" required>
					<input class="input" type="password" id="pwd" name="pwd" placeholder="password" required>
					<div class="shp" onclick="toggler(this)">Show</div>
				
					<input class="input" type="password" id="cpwd" name="cpwd" placeholder="retype password" required>
					<div class="hint">
						<?php
						  $servername = "127.0.0.1";
                          $username = "root";
                          $password = "";
                          $dbname = "konnect_base";
            
                          if ( isset($_POST["pwd"]) AND isset($_POST["cpwd"]) AND isset($_POST["fname"]) AND isset($_POST["email"]) AND isset($_POST["uname"]) ) {

                            if ( $_POST["pwd"] == $_POST["cpwd"] ) {

                              $conn = new mysqli($servername, $username, $password, $dbname);

                              $sql = "INSERT INTO users (full_name, username, password, email_id) VALUES ('".$_POST["fname"]."', '".$_POST["uname"]."', '".$_POST["pwd"]."', '".$_POST["email"]."')";
                              $result = $conn->query($sql);

                              if(!$result) {
                              	echo "something went wrong!";
                              }
                              else {
                              	echo "sign up successfull";
                              	header("Location: ../dashboard/");
                              }
                            }

                            else {
                          	  echo "incorrect password";
                            }

                          }
                        
						?>
					</div>
					<input class="link" type="submit" value="Sign Up">
				</form>
			</div>
		</div>
	</main>
</body>

<script>
						function toggler(e) {
							if (e.innerHTML == 'Show') {
								e.innerHTML = 'Hide'
								document.getElementById('pwd').type = "text";
							} else {
								e.innerHTML = 'Show'
								document.getElementById('pwd').type = "password";
							}
						}
					</script>

</html>
