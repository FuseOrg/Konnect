<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Intranet for NCERC">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Konnect | Sign In</title>
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
	<link rel="stylesheet" href="../../styles/productsans.css">
	<link rel="stylesheet" href="../../styles/icon.css">
	<link rel="stylesheet" href="../../styles/index.css">
</head>

<body>
	<main class="main">
		<div class="logo">
			<div><a href="../../"><i class="material-icons">arrow_back</i></a></div>
			<div>Konnect</div>
		</div>
		<div class="container">
			<div class="content">
				<form action="" method="post">
					<input class="input" type="text" id="uname" name="uname" placeholder="username" required>
					<input class="input" type="password" id="pwd" name="pwd" placeholder="password" required>
					<div class="shp" onclick="toggler(this)">Show</div>
					<div class="hint">
						<?php

                          session_start();

                          if(isset($_SESSION["status"])) {
                          	if($_SESSION["status"] == "online") {
                          	  header('Location: ../dashboard/');
                          	}
                          }

						  $servername = "127.0.0.1";
                          $username = "root";
                          $password = "";
                          $dbname = "konnect_base";
            
                          if (isset($_POST["uname"]) AND isset($_POST["pwd"])) {
                          // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            $sql = "SELECT username, password FROM users WHERE username = '".$_POST["uname"]."'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                              // output data of each row
                              $row = $result->fetch_assoc();
                              if( $_POST["pwd"] == $row["password"] ) {
                                echo "Logging you in..";    
                                session_start();
                                $_SESSION["username"] = $row["username"];
                                $_SESSION["status"] = "online";
                                header("Location: ../dashboard/");  // lines
                              }
                              else
                                echo "<i class='material-icons'>error_outline</i> &nbsp; incorrect password!";
                              } 
                            else {
                                echo "<i class='material-icons'>error_outline</i> &nbsp; unknown username!";
                            }
                            $conn->close();
                          }
						?>
					</div>
					<input class="link" type="submit" value="Sign In">
				</form>
			</div>
		</div>
	</main>
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
</body>

</html>
