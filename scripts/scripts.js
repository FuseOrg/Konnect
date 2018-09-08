(function () {
	'use strict';

	var dialog = document.querySelector('#upload');
	if (!dialog.showModal) {
		dialogPolyfill.registerDialog(dialog);
	}
	dialog.querySelector('.close').addEventListener('click', function () {
		dialog.close();
	});
	dialog.querySelector('.start-upload').addEventListener('click', function () {
		dialog.close();
	});

	var uploadSnackbarContainer = document.querySelector('#snackbar-upload');
	var showSnackbarButton = document.querySelector('#show-snackbar');
	var handler = function (event) {
		location.reload();
	};
	showSnackbarButton.addEventListener('click', function () {
		'use strict';
		var data = {
			message: 'File uploaded!',
			timeout: 5000,
			actionHandler: handler,
			actionText: 'Refresh files'
		};
		uploadSnackbarContainer.MaterialSnackbar.showSnackbar(data);
	});

	document.getElementById("uploadBtn").onchange = function () {
		document.getElementById("uploadFile").value = this.files[0].name;
	};

	var directory = {
			valueNames: ["name", "strength"]
		},
		directoryTable = new List("directory-table", directory);

	$("input.search").on("keyup", function (e) {
		if (e.keyCode === 27) {
			$(e.currentTarget).val("");
			directoryTable.search("");
		}
	});

	var files = {
			valueNames: ["name", "department", "uploaded", "date"]
		},
		filesTable = new List("files-table", files);

	$("input.search").on("keyup", function (e) {
		if (e.keyCode === 27) {
			$(e.currentTarget).val("");
			filesTable.search("");
		}
	});

}());
