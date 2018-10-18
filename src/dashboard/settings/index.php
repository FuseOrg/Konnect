<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Intranet for NCERC">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Konnect | Settings</title>
	<meta name="theme-color" content="#fff">
	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Konnect">
	<link rel="icon" sizes="192x192" href="../../../images/android-desktop.png">
	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	<meta name="apple-mobile-web-app-title" content="Konnect">
	<link rel="apple-touch-icon-precomposed" href="../../../images/ios-desktop.png">
	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="../../../images/ios-desktop.png">
	<meta name="msapplication-TileColor" content="#fff">
	<link rel="shortcut icon" href="../../../images/favicon.png">
	<link rel="stylesheet" href="../../../styles/productsans.css">
	<link rel="stylesheet" href="../../../styles/icon.css">
	<link rel="stylesheet" href="../../../styles/material.min.css">
	<link rel="stylesheet" href="../../../styles/styles.css">
	<script src="../../../scripts/material.min.js"></script>
	<script src="../../../scripts/jquery.min.js"></script>
	<script src="../../../scripts/list.min.js"></script>
</head>

<body class="mdl-demo mdl-base">
	<?php
		session_start();
	?>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-layout__header--waterfall">
			<div class="demo-header-row mdl-layout__header-row">
				<span class="mdl-layout-title logo">Konnect</span>
				<div class="mdl-layout-spacer"></div>
				<div id="search-list">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
						<label class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" for="search">
							<i class="material-icons">search</i>
						</label>
						<div class="mdl-textfield__expandable-holder">
							<input class="mdl-textfield__input fuzzy-search" type="text" id="search">
							<label class="mdl-textfield__label" for="search">Search</label>
						</div>
					</div>
					<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect list search-list" for="search">
						<a href="../dashboard">
							<li class="mdl-menu__item">
								<i class="material-icons">drag_indicator</i>
								<span class="name">Dashboard</span>
							</li>
						</a>
						<a href="../notifications">
							<li class="mdl-menu__item">
								<i class="material-icons">notifications_none</i>
								<span class="name">Notifications</span>
							</li>
						</a>
						<a href="../news">
							<li class="mdl-menu__item">
								<i class="material-icons">outlined_flag</i>
								<span class="name">News</span>
							</li>
						</a>
						<a href="../directory">
							<li class="mdl-menu__item">
								<i class="material-icons">kitchen</i>
								<span class="name">Directory</span>
							</li>
						</a>
						<a href="../files">
							<li class="mdl-menu__item">
								<i class="material-icons">cloud_queue</i>
								<span class="name">Files</span>
							</li>
						</a>
						<a href="../gallery">
							<li class="mdl-menu__item">
								<i class="material-icons">crop_original</i>
								<span class="name">Gallery</span>
							</li>
						</a>
						<a href="../profile">
							<li class="mdl-menu__item">
								<i class="material-icons">tag_faces</i>
								<span class="name">Profile</span>
							</li>
						</a>
						<a href="../settings">
							<li class="mdl-menu__item">
								<i class="material-icons">tune</i>
								<span class="name">Settings</span>
							</li>
						</a>
						<a href="../help">
							<li class="mdl-menu__item">
								<i class="material-icons">help_outline</i>
								<span class="name">Help</span>
							</li>
						</a>
					</ul>
				</div>
				<button id="notifications" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">notifications_none</i></button>
				<span class="mdl-badge mdl-badge--overlap" data-badge="4"></span>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="notifications">
					<a href="../notifications">
						<li class="mdl-menu__item"><i class="material-icons">outlined_flag</i>Notification #1</li>
					</a>
					<a href="../notifications">
						<li class="mdl-menu__item"><i class="material-icons">bookmark_border</i>Notification #2</li>
					</a>
					<a href="../notifications">
						<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">outlined_flag</i>Notification #3</li>
					</a>
					<a href="../notifications">
						<li class="mdl-menu__item"><i class="material-icons">notifications_none</i>All notifications</li>
					</a>
					<a href="../notifications">
						<li class="mdl-menu__item"><i class="material-icons">done_all</i>Mark all as read</li>
					</a>
				</ul>
				<button id="hdrbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon img-bg" style="background-image: url(../../../images/user.jpg);"></button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<a href="../profile">
						<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
					</a>
					<a href="../settings">
						<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
					</a>
					<a href="../../signout">
						<li class="mdl-menu__item"><i class="material-icons">exit_to_app</i>Sign out</li>
					</a>
				</ul>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer">
			<header class="demo-drawer-header">
				<img src="../../../images/user.jpg" class="demo-avatar avatar">
				<div class="demo-avatar-dropdown">
					<span>
						<?php echo $_SESSION["username"] ?>
					</span>
					<div class="mdl-layout-spacer"></div>
					<button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">expand_more</i>
						<span class="visuallyhidden">Accounts</span>
					</button>
					<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
						<a href="../profile">
							<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
						</a>
						<a href="../settings">
							<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
						</a>
						<a href="../../signout">
							<li class="mdl-menu__item"><i class="material-icons">exit_to_app</i>Sign out</li>
						</a>
					</ul>
				</div>
			</header>
			<nav class="demo-navigation mdl-navigation">
				<a class="mdl-navigation__link" href="../"><i class="material-icons" role="presentation">drag_indicator</i>Dashboard</a>
				<a class="mdl-navigation__link" href="../notifications"><i class="material-icons" role="presentation">notifications_none</i><span class="mdl-badge" data-badge="4">Notifications</span></a>
				<a class="mdl-navigation__link" href="../news"><i class="material-icons" role="presentation">outlined_flag</i><span class="mdl-badge mdl-badge--no-background" data-badge="3">News</span></a>
				<a class="mdl-navigation__link" href="../directory"><i class="material-icons" role="presentation">kitchen</i>Directory</a>
				<a class="mdl-navigation__link" href="../files"><i class="material-icons" role="presentation">cloud_queue</i>Files</a>
				<a class="mdl-navigation__link" href="../gallery"><i class="material-icons" role="presentation">crop_original</i>Gallery</a>
				<a class="mdl-navigation__link" href="../profile"><i class="material-icons" role="presentation">tag_faces</i>Profile</a>
				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link active" href=""><i class="material-icons" role="presentation">tune</i>Settings</a>
				<a class="mdl-navigation__link" href="../help"><i class="material-icons" role="presentation">help_outline</i>Help</a>
			</nav>
		</div>
		<main class="demo-main mdl-layout__content">
			<div class="demo-content mdl-grid">
				<!--Settings-->
				<h4 class="heading mdl-cell mdl-cell--12-col">Settings</h4>
			
				<?php
  
                  include('../../db_config.php');
                  
				          if(isset($_POST["full_name"]) OR isset($_POST["username"]) OR isset($_POST["password"]) OR isset($_POST["email_id"]) OR isset($_POST["phoneno"])) {
                  	    $sql2 = "UPDATE users SET full_name = '".$_POST["full_name"]."', username = '".$_POST["username"]."', password = '".$_POST["password"]."', email_id ='".$_POST["email_id"]."', phoneno ='".$_POST["phoneno"]."' WHERE username ='".$_SESSION["username"]."'";
                  	    $result2 = $conn->query($sql2);

                  }
  
                  $sql = "SELECT full_name, password, phoneno, email_id, user_type FROM users WHERE username ='".$_SESSION["username"]."'";
                  $result = $conn->query($sql);
                  $row = $result->fetch_assoc();

				?>
			 
				<ul class="demo-list-two mdl-list mdl-card mdl-cell mdl-cell--12-col">
					<form action="" method="post">
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">face</i>
								<span>Name</span>
								<span class="mdl-list__item-sub-title">Display name</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<div class="mdl-textfield mdl-js-textfield">
										<input class="mdl-textfield__input" type="text" name="full_name" id="name" value="<?php echo $row["full_name"]; ?>" pattern="[a-z,A-Z, ]*">
										<label class="mdl-textfield__label" for="name">Name</label>
										<span class="mdl-textfield__error">Letters and spaces only!</span>
									</div>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">alternate_email</i>
								<span>User name</span>
								<span class="mdl-list__item-sub-title">Registered name</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<div class="mdl-textfield mdl-js-textfield">
										<input class="mdl-textfield__input" type="text" pattern="[a-z,A-Z,0-9,_]*" value="<?php echo $_SESSION["username"]; ?>" id="uname" name="username">
										<label class="mdl-textfield__label" for="uname">Username</label>
										<span class="mdl-textfield__error">Letters, digits and underscore only!</span>
									</div>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">settings</i>
								<span>Password</span>
								<span class="mdl-list__item-sub-title">Current password</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<div class="mdl-textfield mdl-js-textfield">
										<input class="mdl-textfield__input" type="text" pattern="[a-z,A-Z,0-9,_]*" value="<?php echo $row["password"]; ?>" id="uname" name="password">
										<label class="mdl-textfield__label" for="uname">Password</label>
										<span class="mdl-textfield__error">Letters, digits and underscore only!</span>
									</div>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">phone</i>
								<span>Phone</span>
								<span class="mdl-list__item-sub-title">Contact number</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<div class="mdl-textfield mdl-js-textfield">
										<input class="mdl-textfield__input" type="tel" pattern="[0-9]*" value="<?php echo $row["phoneno"]; ?>" id="number" name="phoneno">
										<label class="mdl-textfield__label" for="number">
											Phone No.</label>
										<span class="mdl-textfield__error">Invalid number!</span>
									</div>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">email</i>
								<span>Email</span>
								<span class="mdl-list__item-sub-title">Contact email</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<div class="mdl-textfield mdl-js-textfield">
										<input class="mdl-textfield__input" type="email" id="email" value="<?php echo $row["email_id"]; ?>" name="email_id">
										<label class="mdl-textfield__label" for="email">Email</label>
										<span class="mdl-textfield__error">Invalid email!</span>
									</div>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">tag_faces</i>
								<span>Profile picture</span>
								<span class="mdl-list__item-sub-title">Display picture</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">add_circle</i></button>
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">delete</i></button>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">person</i>
								<span>User Type</span>
								<span class="mdl-list__item-sub-title">Accessabilities of the account</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">
										<?php echo $row["user_type"]; ?></button>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">notifications</i>
								<span>Notifications</span>
								<span class="mdl-list__item-sub-title">Get notified on latest updates</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
										<input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
										<span class="mdl-switch__label">&nbsp;&nbsp;</span>
									</label>
								</span>
							</span>
						</li>
						<li class="mdl-list__item mdl-list__item--two-line">
							<span class="mdl-list__item-primary-content">
								<i class="material-icons mdl-list__item-avatar">save</i>
								<span>Save changes</span>
								<span class="mdl-list__item-sub-title">Or cancel</span>
							</span>
							<span class="mdl-list__item-secondary-content">
								<span class="mdl-list__item-secondary-action">
									<button onclick="window.location.href=''" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">Cancel</button>
									<button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">Save</button>
								</span>
							</span>
						</li>
					</form>
				</ul>
			</div>
		</main>
	</div>
	<div id="demo-snackbar-example" class="mdl-snackbar mdl-js-snackbar">
		<div class="mdl-snackbar__text"></div>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-snackbar__action"></button>
	</div>
	<div id="demo-toast-example" class="mdl-snackbar mdl-js-snackbar">
		<div class="mdl-snackbar__text"></div>
		<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-snackbar__action"></button>
	</div>
	<!--	<script src="../scripts/scripts.js"></script>-->
	<script>
		var searchList = new List('search-list', {
			valueNames: ['name']
		});

	</script>
</body>

</html>
