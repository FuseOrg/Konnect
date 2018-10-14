<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Intranet for NCERC">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<title>Konnect | Directory</title>
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
				<a class="mdl-navigation__link active" href=""><i class="material-icons" role="presentation">kitchen</i>Directory</a>
				<a class="mdl-navigation__link" href="../files"><i class="material-icons" role="presentation">cloud_queue</i>Files</a>
				<a class="mdl-navigation__link" href="../gallery"><i class="material-icons" role="presentation">crop_original</i>Gallery</a>
				<a class="mdl-navigation__link" href="../profile"><i class="material-icons" role="presentation">tag_faces</i>Profile</a>
				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link" href="../settings"><i class="material-icons" role="presentation">tune</i>Settings</a>
				<a class="mdl-navigation__link" href="../help"><i class="material-icons" role="presentation">help_outline</i>Help</a>
			</nav>
		</div>
		<main class="demo-main mdl-layout__content">
			<div class="demo-content mdl-grid">
				<!--Directory table-->
				<h4 class="heading mdl-cell mdl-cell--12-col">Directory</h4>
				<div id="directory-table">
					<div class="table-search">
						<label for="directory-search" class="ico"><i class="material-icons" role="presentation">search</i></label>
						<input class="search" id="directory-search" type="text">
					</div>
					<table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col">
						<thead>
							<tr>
								<th class="mdl-data-table__cell--non-numeric mdl-data-table__header--sorted-ascending sort" data-sort="name">Name</th>
								<th class="sort" data-sort="strength">Strength</th>
							</tr>
						</thead>
						<tbody class="list">
							<tr>
								<td class="mdl-data-table__cell--non-numeric name"><a href="">CSE</a></td>
								<td class="strength">642</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric name"><a href="">MTR</a></td>
								<td class="strength">566</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric name"><a href="">EEE</a></td>
								<td class="strength">596</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric name"><a href="">ME</a></td>
								<td class="strength">544</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric name"><a href="">AUE</a></td>
								<td class="strength">546</td>
							</tr>
							<tr>
								<td class="mdl-data-table__cell--non-numeric name"><a href="">ECE</a></td>
								<td class="strength">556</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan=2 class="mdl-data-table__cell--non-numeric">
									Rows per page: 10
									<button id="per-row" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">arrow_drop_up</i></button>
									<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--top-left" for="per-row">
										<li data-value="10" class="mdl-menu__item">10</li>
										<li data-value="50" class="mdl-menu__item">50</li>
										<li data-value="100" class="mdl-menu__item">100</li>
										<li data-value="*" class="mdl-menu__item">All</li>
									</ul>
									Showing 1-6 of 6
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">keyboard_arrow_left</i></button>
									<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">keyboard_arrow_right</i></button>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
				<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../../images/assisit/bg4.png);">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Attendance</h2>
					</div>
					<div class="mdl-card__supporting-text">
						Insights of current academic year attendance.
					</div>
					<div class="mdl-card__actions">
						<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="profile">
							See my profile
						</a>
					</div>
				</div>
				<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../../images/assisit/bg6.jpg); background-color: #efe9f5;">
					<div class="mdl-card__title">
						<h2 class="mdl-card__title-text">Attendance</h2>
					</div>
					<div class="mdl-card__supporting-text">
						Insights of current academic year attendance.
					</div>
					<div class="mdl-card__actions">
						<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="profile">
							See my profile
						</a>
					</div>
				</div>
			</div>
		</main>
	</div>
	<!--	<script src="../scripts/scripts.js"></script>-->
	<script>
		var searchList = new List('search-list', {
			valueNames: ['name']
		});
		var directory = {
				valueNames: ["name", "strength"]
			},
			directoryTable = new List("directory-table", directory);
		$($('th.sort')[0]).trigger('click', function() {
			console.log('clicked');
		});
		$(document).on('click', '.sort', function() {
			$('.sort').removeClass('mdl-data-table__header--sorted-ascending mdl-data-table__header--sorted-descending');
			if ($(this).hasClass('asc')) {
				$(this).addClass('mdl-data-table__header--sorted-ascending')
			} else if ($(this).hasClass('desc')) {
				$(this).addClass('mdl-data-table__header--sorted-descending')
			}
		});
		$("input.search").on("keyup", function(e) {
			if (e.keyCode === 27) {
				$(e.currentTarget).val("");
				directoryTable.search("");
			}
		});

	</script>
</body>

</html>
