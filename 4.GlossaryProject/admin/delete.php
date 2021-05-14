<?php
session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_post()) {
	$term = sanitize($_POST['term']);

	if (empty($term)) {
		//todo: display message
	} else {
		delete_term($term);
		redirect('index.php');
	}
}

if (is_get()) {
	$key = sanitize($_GET['key']);

	// check if it's empty first for performance
	if (empty($key)) {
		view('not_found');
		die();
	}

	$term = get_term($key);

	// check for sanitization later, for performance
	if ($term === false) {
		view('not_found');
		die();
	}

	view('admin/delete', $term);
}
