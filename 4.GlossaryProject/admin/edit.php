<?php
session_start();

require('../app/app.php');

ensure_user_is_authenticated();

if (is_post()) {
	$term = sanitize($_POST['term']);
	$definition = sanitize($_POST['definition']);
	$original_term = sanitize($_POST['original-term']);

	if (empty($term) || empty($definition) || empty($original_term)) {
		//todo: display message
	} else {
		Data::update_term($original_term, $term, $definition);
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

	$term = Data::get_term($key);

	// check for sanitization later, for performance
	if ($term === false) {
		view('not_found');
		die();
	}

	view('admin/edit', $term);
}
