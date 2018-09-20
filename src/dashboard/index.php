<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Intranet for NCERC">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Konnect | Dashboard</title>
	<meta name="theme-color" content="#fff">
	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Konnect">
	<link rel="icon" sizes="192x192" href="../../images/android-desktop.png">
	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	<meta name="apple-mobile-web-app-title" content="Konnect">
	<link rel="apple-touch-icon-precomposed" href="../../images/ios-desktop.png">
	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="../../images/ios-desktop.png">
	<meta name="msapplication-TileColor" content="#fff">
	<link rel="shortcut icon" href="../../images/favicon.png">
	<!--	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Product+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../../styles/material.min.css">
	<link rel="stylesheet" href="../../styles/styles.css">
	<script src="../../scripts/material.min.js"></script>
	<script src="../../scripts/jquery.min.js"></script>
	<script src="../../scripts/list.min.js"></script>
	<style>
		.dataset {
			fill-opacity: 0.8;
			filter: url(#dropshadow);
		}

		#dataset-1 {
			fill: #50E3C2;
		}

		#dataset-2 {
			fill: #21A6EE;
		}

		#dataset-3 {
			fill: #807CCC;
		}

		.chart button {
			float: right;
		}

		@keyframes raise {
			0% {
				transform: scaleY(0.01);
			}

			75% {
				transform: scaleY(1.1);
			}

			100% {
				transform: scaleY(1);
			}
		}

		.dataset {
			transform-origin: bottom;
			transform: scaleY(0.01);
			opacity: 0.5;
		}

		.loaded .dataset {
			opacity: 1;
			animation: raise 0.5s ease 0.2s forwards;
		}

		.loaded #dataset-1 {
			animation-delay: 0.2s;
		}

		.loaded #dataset-2 {
			animation-delay: 0.1s;
		}

		.loaded #dataset-3 {
			animation-delay: 0s;
		}
	</style>
</head>

<body class="mdl-demo mdl-base">
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
						<a href="dashboard.php">
							<li class="mdl-menu__item">
								<i class="material-icons">drag_indicator</i>
								<span class="name">Dashboard</span>
							</li>
						</a>
						<a href="notifications.php">
							<li class="mdl-menu__item">
								<i class="material-icons">notifications_none</i>
								<span class="name">Notifications</span>
							</li>
						</a>
						<a href="news.php">
							<li class="mdl-menu__item">
								<i class="material-icons">outlined_flag</i>
								<span class="name">News</span>
							</li>
						</a>
						<a href="directory.php">
							<li class="mdl-menu__item">
								<i class="material-icons">kitchen</i>
								<span class="name">Directory</span>
							</li>
						</a>
						<a href="files.php">
							<li class="mdl-menu__item">
								<i class="material-icons">cloud_queue</i>
								<span class="name">Files</span>
							</li>
						</a>
						<a href="gallery.php">
							<li class="mdl-menu__item">
								<i class="material-icons">crop_original</i>
								<span class="name">Gallery</span>
							</li>
						</a>
						<a href="profile.php">
							<li class="mdl-menu__item">
								<i class="material-icons">tag_faces</i>
								<span class="name">Profile</span>
							</li>
						</a>
						<a href="settings.php">
							<li class="mdl-menu__item">
								<i class="material-icons">tune</i>
								<span class="name">Settings</span>
							</li>
						</a>
						<a href="help.php">
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
				<button id="hdrbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon img-bg" style="background-image: url(../../images/user.jpg);"></button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<a href="profile.php">
						<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
					</a>
					<a href="settings.php">
						<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
					</a>
					<a href="../index.html">
						<li class="mdl-menu__item"><i class="material-icons">exit_to_app</i>Sign out</li>
					</a>
				</ul>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer">
			<header class="demo-drawer-header">
				<img src="../../images/user.jpg" class="demo-avatar avatar">
				<div class="demo-avatar-dropdown">
					<span>User name</span>
					<div class="mdl-layout-spacer"></div>
					<button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">expand_more</i>
						<span class="visuallyhidden">Accounts</span>
					</button>
					<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
						<a href="profile">
							<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
						</a>
						<a href="settings.php">
							<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
						</a>
						<a href="../index.html">
							<li class="mdl-menu__item"><i class="material-icons">exit_to_app</i>Sign out</li>
						</a>
					</ul>
				</div>
			</header>
			<nav class="demo-navigation mdl-navigation">
				<a class="mdl-navigation__link active" href=""><i class="material-icons" role="presentation">drag_indicator</i>Dashboard</a>
				<a class="mdl-navigation__link" href="notifications"><i class="material-icons" role="presentation">notifications_none</i><span class="mdl-badge" data-badge="4">Notifications</span></a>
				<a class="mdl-navigation__link" href="news"><i class="material-icons" role="presentation">outlined_flag</i><span class="mdl-badge mdl-badge--no-background" data-badge="3">News</span></a>
				<a class="mdl-navigation__link" href="directory"><i class="material-icons" role="presentation">kitchen</i>Directory</a>
				<a class="mdl-navigation__link" href="files"><i class="material-icons" role="presentation">cloud_queue</i>Files</a>
				<a class="mdl-navigation__link" href="gallery"><i class="material-icons" role="presentation">crop_original</i>Gallery</a>
				<a class="mdl-navigation__link" href="profile"><i class="material-icons" role="presentation">tag_faces</i>Profile</a>
				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link" href="settings"><i class="material-icons" role="presentation">tune</i>Settings</a>
				<a class="mdl-navigation__link" href="help"><i class="material-icons" role="presentation">help_outline</i>Help</a>
			</nav>
		</div>
		<main class="demo-main mdl-layout__content">
			<div class="mdl-tabs mdl-js-tabs">
				<div class="mdl-tabs__tab-bar">
					<a href="#insight" class="mdl-tabs__tab is-active">Insight</a>
					<a href="#all" class="mdl-tabs__tab">All</a>
				</div>
				<div class="mdl-tabs__panel is-active demo-content mdl-grid" id="insight">
					<!--Insight cards-->
					<div class="mdl-cell mdl-cell--12-col heading">Insight</div>
					<div class="chart mdl-card mdl-cell mdl-cell--12-col">
						<svg viewbox="0 0 560 260">
							<defs>
								<filter id="dropshadow">
									<feGaussianBlur in="SourceAlpha" stdDeviation="3"></feGaussianBlur>
									<feOffset dx="0" dy="0" result="offsetblur"></feOffset>
									<feComponentTransfer>
										<feFuncA slope="0.2" type="linear"></feFuncA>
									</feComponentTransfer>
									<feMerge>
										<feMergeNode></feMergeNode>
										<feMergeNode in="SourceGraphic"></feMergeNode>
									</feMerge>
								</filter>
							</defs>
							<g class="datasets">
								<path class="dataset" d="M0,260 C0,260 4,252 7,252 C66,252 90,102 139,102 C188,102 205,135 252,135 C299,135 309,89 330,89 C350,89 366,122 404,122 C442,122 431,98 451,98 C470,98 499,213 560,260 L0,259 Z" id="dataset-3"></path>
								<path class="dataset" d="M0,260 C35,254 63,124 88,124 C114,124 148,163 219,163 C290,163 315,100 359,100 C402,100 520,244 560,259 C560,259 0,259 0,260 Z" id="dataset-2"></path>
								<path class="dataset" d="M0,260 C0,260 22,199 64,199 C105,199 112,144 154,144 C195,144 194,126 216,126 C237,126 263,184 314,184 C365,183 386,128 434,129 C483,130 511,240 560,260 L0,260 Z" id="dataset-1"></path>
							</g>
						</svg>
						<div class="mdl-card__menu">
							<button class="js-do-it-again mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								<i class="material-icons ion-loop">refresh</i>
							</button>
						</div>
					</div>
					<div class="chart mdl-card mdl-cell mdl-cell--12-col">
						<svg viewbox="0 0 560 260">
							<defs>
								<filter id="dropshadow">
									<feGaussianBlur in="SourceAlpha" stdDeviation="3"></feGaussianBlur>
									<feOffset dx="0" dy="0" result="offsetblur"></feOffset>
									<feComponentTransfer>
										<feFuncA slope="0.2" type="linear"></feFuncA>
									</feComponentTransfer>
									<feMerge>
										<feMergeNode></feMergeNode>
										<feMergeNode in="SourceGraphic"></feMergeNode>
									</feMerge>
								</filter>
							</defs>
							<g class="datasets">
								<path class="dataset" d="M0,260 C0,260 4,252 7,252 C66,252 90,102 139,102 C188,102 205,135 252,135 C299,135 309,89 330,89 C350,89 366,122 404,122 C442,122 431,98 451,98 C470,98 499,213 560,260 L0,259 Z" id="dataset-3"></path>
								<path class="dataset" d="M0,260 C0,260 22,199 64,199 C105,199 112,144 154,144 C195,144 194,126 216,126 C237,126 263,184 314,184 C365,183 386,128 434,129 C483,130 511,240 560,260 L0,260 Z" id="dataset-1"></path>
								<path class="dataset" d="M0,260 C35,254 63,124 88,124 C114,124 148,163 219,163 C290,163 315,100 359,100 C402,100 520,244 560,259 C560,259 0,259 0,260 Z" id="dataset-2"></path>
							</g>
						</svg>
						<div class="mdl-card__menu">
							<button class="js-do-it-again mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								<i class="material-icons ion-loop">refresh</i>
							</button>
						</div>
					</div>
					<div class="chart mdl-card mdl-cell mdl-cell--12-col">
						<svg viewbox="0 0 560 260">
							<defs>
								<filter id="dropshadow">
									<feGaussianBlur in="SourceAlpha" stdDeviation="3"></feGaussianBlur>
									<feOffset dx="0" dy="0" result="offsetblur"></feOffset>
									<feComponentTransfer>
										<feFuncA slope="0.2" type="linear"></feFuncA>
									</feComponentTransfer>
									<feMerge>
										<feMergeNode></feMergeNode>
										<feMergeNode in="SourceGraphic"></feMergeNode>
									</feMerge>
								</filter>
							</defs>
							<g class="datasets">
								<path class="dataset" d="M0,260 C35,254 63,124 88,124 C114,124 148,163 219,163 C290,163 315,100 359,100 C402,100 520,244 560,259 C560,259 0,259 0,260 Z" id="dataset-2"></path>
								<path class="dataset" d="M0,260 C0,260 4,252 7,252 C66,252 90,102 139,102 C188,102 205,135 252,135 C299,135 309,89 330,89 C350,89 366,122 404,122 C442,122 431,98 451,98 C470,98 499,213 560,260 L0,259 Z" id="dataset-3"></path>
								<path class="dataset" d="M0,260 C0,260 22,199 64,199 C105,199 112,144 154,144 C195,144 194,126 216,126 C237,126 263,184 314,184 C365,183 386,128 434,129 C483,130 511,240 560,260 L0,260 Z" id="dataset-1"></path>
							</g>
						</svg>
						<div class="mdl-card__menu">
							<button class="js-do-it-again mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
								<i class="material-icons ion-loop">refresh</i>
							</button>
						</div>
					</div>
					<script>
						(function() {
							var load_chart;

							load_chart = function() {
								$("body").removeClass("loaded");
								return setTimeout(function() {
									return $("body").addClass("loaded");
								}, 500);
							};

							$(".js-do-it-again").on("click", function() {
								return load_chart();
							});

							load_chart();

						}).call(this);

					</script>
				</div>
				<div class="mdl-tabs__panel demo-content mdl-grid" id="all">
					<!--All cards-->
					<div class="mdl-cell mdl-cell--12-col heading">All</div>
				</div>
			</div>
		</main>
	</div>
	<button id="fab" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--accent mdl-shadow--6dp" onclick="location.reload()">
		<i class="material-icons">refresh</i>
	</button>
	<span class="mdl-tooltip mdl-tooltip--left" for="fab">Refresh page</span>
	<script src="../scripts/scripts.js"></script>
	<script>
		var searchList = new List('search-list', {
			valueNames: ['name']
		});

	</script>
</body>

</html>
