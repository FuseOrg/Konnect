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
	<link rel="stylesheet" href="../../styles/productsans.css">
	<link rel="stylesheet" href="../../styles/icon.css">
	<link rel="stylesheet" href="../../styles/material.min.css">
	<link rel="stylesheet" href="../../styles/styles.css">
	<script src="../../scripts/material.min.js"></script>
	<script src="../../scripts/jquery.min.js"></script>
	<script src="../../scripts/list.min.js"></script>
</head>

<body class="mdl-demo mdl-base">
	<?php
	  session_start();

	  if(!isset($_SESSION["status"])) {
	    header('Location: ../signin/');
	  }
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
						<a href="dashboard">
							<li class="mdl-menu__item">
								<i class="material-icons">drag_indicator</i>
								<span class="name">Dashboard</span>
							</li>
						</a>
						<a href="notifications">
							<li class="mdl-menu__item">
								<i class="material-icons">notifications_none</i>
								<span class="name">Notifications</span>
							</li>
						</a>
						<a href="news">
							<li class="mdl-menu__item">
								<i class="material-icons">outlined_flag</i>
								<span class="name">News</span>
							</li>
						</a>
						<a href="directory">
							<li class="mdl-menu__item">
								<i class="material-icons">kitchen</i>
								<span class="name">Directory</span>
							</li>
						</a>
						<a href="files">
							<li class="mdl-menu__item">
								<i class="material-icons">cloud_queue</i>
								<span class="name">Files</span>
							</li>
						</a>
						<a href="gallery">
							<li class="mdl-menu__item">
								<i class="material-icons">crop_original</i>
								<span class="name">Gallery</span>
							</li>
						</a>
						<a href="profile">
							<li class="mdl-menu__item">
								<i class="material-icons">tag_faces</i>
								<span class="name">Profile</span>
							</li>
						</a>
						<a href="settings">
							<li class="mdl-menu__item">
								<i class="material-icons">tune</i>
								<span class="name">Settings</span>
							</li>
						</a>
						<a href="help">
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
					<a href="notifications">
						<li class="mdl-menu__item"><i class="material-icons">outlined_flag</i>Notification #1</li>
					</a>
					<a href="notifications">
						<li class="mdl-menu__item"><i class="material-icons">bookmark_border</i>Notification #2</li>
					</a>
					<a href="notifications">
						<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">outlined_flag</i>Notification #3</li>
					</a>
					<a href="notifications">
						<li class="mdl-menu__item"><i class="material-icons">notifications_none</i>All notifications</li>
					</a>
					<a href="notifications">
						<li class="mdl-menu__item"><i class="material-icons">done_all</i>Mark all as read</li>
					</a>
				</ul>
				<button id="hdrbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon img-bg" style="background-image: url(../../images/user.jpg);"></button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<a href="profile">
						<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
					</a>
					<a href="settings">
						<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
					</a>
					<a href="../signout">
						<li class="mdl-menu__item"><i class="material-icons">exit_to_app</i>Sign out</li>
					</a>
				</ul>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer">
			<header class="demo-drawer-header">
				<img src="../../images/user.jpg" class="demo-avatar avatar">
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
						<a href="profile">
							<li class="mdl-menu__item"><i class="material-icons">tag_faces</i>Profile</li>
						</a>
						<a href="settings">
							<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><i class="material-icons">tune</i>Settings</li>
						</a>
						<a href="../signout">
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
					<div class="mdl-cell mdl-cell--12-col heading">Attendance</div>
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg1.png); background-color: #f9f1ff;">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg3.png)">
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
					<div class="mdl-cell mdl-cell--12-col">
						<script>
							window.onload = function() {
								var chart1 = new CanvasJS.Chart("chartContainer1", {
									animationEnabled: true,
									theme: "light2",
									axisY: {
										suffix: "%",
										labelFontSize: 16,
										minimum: 0,
										maximum: 100,
										interval: 10,
										lineColor: "grey",
										labelFontColor: "grey",
										labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										lineThickness: 1,
										tickColor: "rgba(0, 0, 0, .12)",
										gridColor: "rgba(0, 0, 0, .12)",
										gridThickness: 1,
										stripLines: [{
											value: 45,
											label: "Minimum",
											labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif"
										}]
									},
									axisX: {
										labelFontSize: 16,
										lineColor: "grey",
										labelFontColor: "grey",
										labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										lineThickness: 1,
										tickColor: "rgba(0, 0, 0, .12)",
										gridColor: "rgba(0, 0, 0, .12)",
										gridThickness: 1
									},
									toolTip: {
										shared: true,
										fontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif"
									},
									legend: {
										cursor: "pointer",
										itemclick: toggleDataSeries,
										fontSize: 16,
										fontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										fontColor: "grey"
									},
									data: [{
											type: "spline",
											name: "S7",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 78
												},
												{
													label: "Sep",
													y: 75
												},
												{
													label: "Oct",
													y: 67
												},
												{
													label: "Nov",
													y: 98
												},
												{
													label: "Dec",
													y: 89
												},
												{
													label: "Jan",
													y: 87
												}
											]
										},
										{
											type: "spline",
											name: "S8",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 97
												},
												{
													label: "Sep",
													y: 78
												},
												{
													label: "Oct",
													y: 58
												},
												{
													label: "Nov",
													y: 78
												},
												{
													label: "Dec",
													y: 74
												},
												{
													label: "Jan",
													y: 57
												}
											]
										},
										{
											type: "spline",
											name: "4th year",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 57
												},
												{
													label: "Sep",
													y: 58
												},
												{
													label: "Oct",
													y: 79
												},
												{
													label: "Nov",
													y: 98
												},
												{
													label: "Dec",
													y: 89
												},
												{
													label: "Jan",
													y: 85
												}
											]
										}
									]
								});
								var chart2 = new CanvasJS.Chart("chartContainer2", {
									animationEnabled: true,
									theme: "light2",
									axisY: {
										suffix: "%",
										labelFontSize: 16,
										minimum: 0,
										maximum: 100,
										interval: 10,
										lineColor: "grey",
										labelFontColor: "grey",
										labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										lineThickness: 1,
										tickColor: "rgba(0, 0, 0, .12)",
										gridColor: "rgba(0, 0, 0, .12)",
										gridThickness: 1,
										stripLines: [{
											value: 45,
											label: "Minimum",
											labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif"
										}]
									},
									axisX: {
										labelFontSize: 16,
										lineColor: "grey",
										labelFontColor: "grey",
										labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										lineThickness: 1,
										tickColor: "rgba(0, 0, 0, .12)",
										gridColor: "rgba(0, 0, 0, .12)",
										gridThickness: 1
									},
									toolTip: {
										shared: true,
										fontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif"
									},
									legend: {
										cursor: "pointer",
										itemclick: toggleDataSeries,
										fontSize: 16,
										fontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										fontColor: "grey"
									},
									data: [{
											type: "spline",
											name: "CS401",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 78
												},
												{
													label: "Sep",
													y: 75
												},
												{
													label: "Oct",
													y: 67
												},
												{
													label: "Nov",
													y: 98
												},
												{
													label: "Dec",
													y: 89
												},
												{
													label: "Jan",
													y: 87
												}
											]
										},
										{
											type: "spline",
											name: "CS403",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 97
												},
												{
													label: "Sep",
													y: 78
												},
												{
													label: "Oct",
													y: 58
												},
												{
													label: "Nov",
													y: 78
												},
												{
													label: "Dec",
													y: 74
												},
												{
													label: "Jan",
													y: 57
												}
											]
										},
										{
											type: "spline",
											name: "CS405",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 57
												},
												{
													label: "Sep",
													y: 58
												},
												{
													label: "Oct",
													y: 79
												},
												{
													label: "Nov",
													y: 98
												},
												{
													label: "Dec",
													y: 89
												},
												{
													label: "Jan",
													y: 85
												}
											]
										},
										{
											type: "spline",
											name: "CS407",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 82
												},
												{
													label: "Sep",
													y: 94
												},
												{
													label: "Oct",
													y: 87
												},
												{
													label: "Nov",
													y: 65
												},
												{
													label: "Dec",
													y: 67
												},
												{
													label: "Jan",
													y: 69
												}
											]
										},
										{
											type: "spline",
											name: "CS409",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 89
												},
												{
													label: "Sep",
													y: 87
												},
												{
													label: "Oct",
													y: 75
												},
												{
													label: "Nov",
													y: 85
												},
												{
													label: "Dec",
													y: 65
												},
												{
													label: "Jan",
													y: 82
												}
											]
										},
										{
											type: "spline",
											name: "CS411",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 24
												},
												{
													label: "Sep",
													y: 84
												},
												{
													label: "Oct",
													y: 87
												},
												{
													label: "Nov",
													y: 85
												},
												{
													label: "Dec",
													y: 87
												},
												{
													label: "Jan",
													y: 85
												}
											]
										},
										{
											type: "spline",
											name: "S7",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 57
												},
												{
													label: "Sep",
													y: 45
												},
												{
													label: "Oct",
													y: 56
												},
												{
													label: "Nov",
													y: 45
												},
												{
													label: "Dec",
													y: 48
												},
												{
													label: "Jan",
													y: 45
												}
											]
										}
									]
								});
								var chart3 = new CanvasJS.Chart("chartContainer3", {
									animationEnabled: true,
									theme: "light2",
									axisY: {
										suffix: "%",
										labelFontSize: 16,
										minimum: 0,
										maximum: 100,
										interval: 10,
										lineColor: "grey",
										labelFontColor: "grey",
										labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										lineThickness: 1,
										tickColor: "rgba(0, 0, 0, .12)",
										gridColor: "rgba(0, 0, 0, .12)",
										gridThickness: 1,
										stripLines: [{
											value: 45,
											label: "Minimum",
											labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif"
										}]
									},
									axisX: {
										labelFontSize: 16,
										lineColor: "grey",
										labelFontColor: "grey",
										labelFontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										lineThickness: 1,
										tickColor: "rgba(0, 0, 0, .12)",
										gridColor: "rgba(0, 0, 0, .12)",
										gridThickness: 1
									},
									toolTip: {
										shared: true,
										fontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif"
									},
									legend: {
										cursor: "pointer",
										itemclick: toggleDataSeries,
										fontSize: 16,
										fontFamily: "'Product Sans', 'Roboto', 'Helvetica', sans-serif",
										fontColor: "grey"
									},
									data: [{
											type: "spline",
											name: "CS401",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 78
												},
												{
													label: "Sep",
													y: 75
												},
												{
													label: "Oct",
													y: 67
												},
												{
													label: "Nov",
													y: 98
												},
												{
													label: "Dec",
													y: 89
												},
												{
													label: "Jan",
													y: 87
												}
											]
										},
										{
											type: "spline",
											name: "CS403",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 97
												},
												{
													label: "Sep",
													y: 78
												},
												{
													label: "Oct",
													y: 58
												},
												{
													label: "Nov",
													y: 78
												},
												{
													label: "Dec",
													y: 74
												},
												{
													label: "Jan",
													y: 57
												}
											]
										},
										{
											type: "spline",
											name: "CS405",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 57
												},
												{
													label: "Sep",
													y: 58
												},
												{
													label: "Oct",
													y: 79
												},
												{
													label: "Nov",
													y: 98
												},
												{
													label: "Dec",
													y: 89
												},
												{
													label: "Jan",
													y: 85
												}
											]
										},
										{
											type: "spline",
											name: "CS407",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 82
												},
												{
													label: "Sep",
													y: 94
												},
												{
													label: "Oct",
													y: 87
												},
												{
													label: "Nov",
													y: 65
												},
												{
													label: "Dec",
													y: 67
												},
												{
													label: "Jan",
													y: 69
												}
											]
										},
										{
											type: "spline",
											name: "CS409",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 89
												},
												{
													label: "Sep",
													y: 87
												},
												{
													label: "Oct",
													y: 75
												},
												{
													label: "Nov",
													y: 85
												},
												{
													label: "Dec",
													y: 65
												},
												{
													label: "Jan",
													y: 82
												}
											]
										},
										{
											type: "spline",
											name: "CS411",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 24
												},
												{
													label: "Sep",
													y: 84
												},
												{
													label: "Oct",
													y: 87
												},
												{
													label: "Nov",
													y: 85
												},
												{
													label: "Dec",
													y: 87
												},
												{
													label: "Jan",
													y: 85
												}
											]
										},
										{
											type: "spline",
											name: "S7",
											lineThickness: 3,
											showInLegend: true,
											dataPoints: [{
													label: "Aug",
													y: 57
												},
												{
													label: "Sep",
													y: 45
												},
												{
													label: "Oct",
													y: 56
												},
												{
													label: "Nov",
													y: 45
												},
												{
													label: "Dec",
													y: 48
												},
												{
													label: "Jan",
													y: 45
												}
											]
										}
									]
								});
								chart1.render();
								chart2.render();
								chart3.render();

								function toggleDataSeries(e) {
									if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
										e.dataSeries.visible = false;
									} else {
										e.dataSeries.visible = true;
									}
									chart1.render();
									chart2.render();
									chart3.render();
								}
							}

						</script>
						<div id="chartContainer1" class="chart" style="height: 60vh; width: 100%;"></div>
						<script src="../../scripts/canvasjs.min.js"></script>
					</div>
					<div class="mdl-cell mdl-cell--12-col heading">Semester</div>
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg2.jpg); background-color: #f7f7f7;">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg4.png);">
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
					<div class="mdl-cell mdl-cell--12-col">
						<div id="chartContainer2" class="chart" style="height: 60vh; width: 100%;"></div>
					</div>
					<div class="mdl-cell mdl-cell--12-col heading">Others</div>
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg5.jpg); background-color: #c2e3f6;">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg6.jpg); background-color: #efe9f5;">
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
					<div class="mdl-cell mdl-cell--12-col">
						<div id="chartContainer3" class="chart" style="height: 60vh; width: 100%;"></div>
					</div>
				</div>
				<div class="mdl-tabs__panel demo-content mdl-grid" id="all">
					<!--All cards-->
					<div class="mdl-cell mdl-cell--12-col heading">Subjects</div>
					<div class="img-bg mdl-card mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg1.png); background-color: #f9f1ff;">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg2.jpg); background-color: #f7f7f7;">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg3.png)">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg4.png);">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg5.jpg); background-color: #c2e3f6;">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg6.jpg); background-color: #efe9f5;">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg7.png);">
						<div class="mdl-card__title">
							<h2 class="mdl-card__title-text">Didn't found what you were looking for?</h2>
						</div>
						<div class="mdl-card__supporting-text">
							Notifications are sent by college, check out news and events page for other announcements!
						</div>
						<div class="mdl-card__actions">
							<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="../news">
								See news
							</a>
						</div>
					</div>
					<div class="img-bg mdl-card mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg8.png);">
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
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg9.png);">
						<div class="mdl-card__title">
							<h2 class="mdl-card__title-text">What's happening around?</h2>
						</div>
						<div class="mdl-card__supporting-text">
							Involve in events, workshops, activities and more!
						</div>
						<div class="mdl-card__actions">
							<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="../notifications">
								See notifications
							</a>
						</div>
					</div>
					<div class="img-bg mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="background: url(../../images/assisit/bg11.png); background-color: #f7f9fa;">
						<div class="mdl-card__title">
							<h2 class="mdl-card__title-text">Didn't found what you were looking for?</h2>
						</div>
						<div class="mdl-card__supporting-text">
							Notifications are sent by college, check out news and events page for other announcements!
						</div>
						<div class="mdl-card__actions">
							<a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="../news">
								See news
							</a>
						</div>
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

	</script>
</body>

</html>
