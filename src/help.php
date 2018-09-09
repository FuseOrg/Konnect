<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Intranet for NCERC">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Konnect | Help</title>
	<meta name="theme-color" content="#fff">
	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Konnect">
	<link rel="icon" sizes="192x192" href="../images/android-desktop.png">
	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	<meta name="apple-mobile-web-app-title" content="Konnect">
	<link rel="apple-touch-icon-precomposed" href="../images/ios-desktop.png">
	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="../images/ios-desktop.png">
	<meta name="msapplication-TileColor" content="#fff">
	<link rel="shortcut icon" href="../images/favicon.png">
	<!--	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Product+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../styles/material.min.css">
	<link rel="stylesheet" href="../styles/styles.css">
	<script src="../scripts/material.min.js"></script>
	<script src="../scripts/jquery.min.js"></script>
</head>

<body class="mdl-demo mdl-color--grey-50 mdl-color-text--grey-800 mdl-base">
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header">
			<div class="demo-header-row mdl-layout__header-row">
				<span class="mdl-layout-title logo">Konnect</span>
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
					<label class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" for="search">
						<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="search">
						<label class="mdl-textfield__label" for="search">Search</label>
					</div>
				</div>
				<button id="notifications" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">notifications_none</i></button>
				<span class="mdl-badge mdl-badge--overlap" data-badge="4"></span>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="notifications">
					<a href="">
						<li class="mdl-menu__item"><i class="material-icons">outlined_flag</i>Notification #1</li>
					</a>
					<a href="">
						<li class="mdl-menu__item"><i class="material-icons">bookmark_border</i>Notification #2</li>
					</a>
					<a href="">
						<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">outlined_flag</i>Notification #3</li>
					</a>
					<a href="notifications.php">
						<li class="mdl-menu__item"><i class="material-icons">notifications_none</i>All notifications</li>
					</a>
					<li class="mdl-menu__item"><i class="material-icons">done_all</i>Mark all as read</li>
				</ul>
				<button id="hdrbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon img-bg" style="background-image: url(../images/user.jpg);"></button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<a href="profile.php">
						<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
					</a>
					<a href="settings.php">
						<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
					</a>
					<a href="../index.php">
						<li class="mdl-menu__item"><i class="material-icons">exit_to_app</i>Sign out</li>
					</a>
				</ul>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--grey-100 mdl-shadow--6dp">
			<header class="demo-drawer-header">
				<img src="../images/user.jpg" class="demo-avatar avatar">
				<div class="demo-avatar-dropdown">
					<span>User name</span>
					<div class="mdl-layout-spacer"></div>
					<button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">expand_more</i>
						<span class="visuallyhidden">Accounts</span>
					</button>
					<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
						<a href="profile.php">
							<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
						</a>
						<a href="settings.php">
							<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
						</a>
						<a href="../index.php">
							<li class="mdl-menu__item"><i class="material-icons">exit_to_app</i>Sign out</li>
						</a>
					</ul>
				</div>
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--white">
				<a class="mdl-navigation__link" href="dashboard.php"><i class="material-icons" role="presentation">drag_indicator</i>Dashboard</a>
				<a class="mdl-navigation__link" href="notifications.php"><i class="material-icons" role="presentation">notifications_none</i><span class="mdl-badge" data-badge="4">Notifications</span></a>
				<a class="mdl-navigation__link" href="news.php"><i class="material-icons" role="presentation">outlined_flag</i><span class="mdl-badge mdl-badge--no-background" data-badge="3">News</span></a>
				<a class="mdl-navigation__link" href="events.php"><i class="material-icons" role="presentation">bookmark_border</i><span class="mdl-badge mdl-badge--no-background" data-badge="1">Events</span></a>
				<a class="mdl-navigation__link" href="directory.php"><i class="material-icons" role="presentation">kitchen</i>Directory</a>
				<a class="mdl-navigation__link" href="files.php"><i class="material-icons" role="presentation">cloud_queue</i>Files</a>
				<a class="mdl-navigation__link" href="gallery.php"><i class="material-icons" role="presentation">crop_original</i>Gallery</a>
				<a class="mdl-navigation__link" href="profile.php"><i class="material-icons" role="presentation">tag_faces</i>Profile</a>
				<div class="mdl-layout-spacer mdl-menu__item--full-bleed-divider"></div>
				<a class="mdl-navigation__link" href="settings.php"><i class="material-icons" role="presentation">tune</i>Settings</a>
				<a class="mdl-navigation__link active" href="help.php"><i class="material-icons" role="presentation">help_outline</i>Help</a>
			</nav>
		</div>
		<main class="demo-main mdl-layout__content">
			<div class="demo-ribbon mdl-color--accent mdl-shadow--2dp"></div>
			<div class="demo-content mdl-grid">

			</div>
			<footer class="mdl-mega-footer">
				<div class="mdl-mega-footer--middle-section">
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">Features</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">About</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Updates</a></li>
						</ul>
					</div>
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">Details</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">Spec</a></li>
							<li><a href="#">Tools</a></li>
							<li><a href="#">Resources</a></li>
						</ul>
					</div>
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">FAQ</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">Questions</a></li>
							<li><a href="#">Answers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">Quick Links</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">Link #1</a></li>
							<li><a href="#">Link #2</a></li>
							<li><a href="#">Link #3</a></li>
						</ul>
					</div>
				</div>
				<div class="mdl-mega-footer--bottom-section">
					<div class="mdl-logo logo">
						Konnect
					</div>
					<ul class="mdl-mega-footer--link-list">
						<li><i class="material-icons">favorite</i></li>
						<li><a href="https://fuse-org.firebaseapp.com">&copy;Fuse Org</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Privacy and Terms</a></li>
					</ul>
				</div>
			</footer>
		</main>
	</div>
	<a href="../index.php">
		<button id="fab" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--accent mdl-shadow--6dp">
			<i class="material-icons">exit_to_app</i>
		</button>
	</a>
	<span class="mdl-tooltip mdl-tooltip--left" for="fab">Sign out</span>
	<dialog class="mdl-dialog">
		<h4 class="mdl-dialog__title">Upload new file</h4>
		<div class="mdl-dialog__content">
			<p>
				Allowing us to collect data will let us get you the information you want faster.
			</p>
		</div>
		<div class="mdl-dialog__actions">
			<button id="demo-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent close">Upload</button>
			<button id="demo-show-toast" class="mdl-button">Show Toast</button>
		</div>
	</dialog>
	<div id="demo-snackbar-example" class="mdl-snackbar mdl-js-snackbar">
		<div class="mdl-snackbar__text"></div>
		<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-snackbar__action"></button>
	</div>
	<div id="demo-toast-example" class="mdl-snackbar mdl-js-snackbar">
		<div class="mdl-snackbar__text"></div>
		<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-snackbar__action"></button>
	</div>
	<script src="../scripts/scripts.js"></script>
</body>

</html>
