<?php

function view($name, $model = '') {
	global $view_bag;
	require(APP_ROOT . "views/layout.view.php");
}

function redirect($url) {
	header("Location: $url");
	die();
}

function is_post() {
	return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function is_get() {
	return $_SERVER['REQUEST_METHOD'] === 'GET';
}

function sanitize($value) {
	$temp = filter_var(trim($value), FILTER_SANITIZE_STRING);

	return $temp === false ? '' : $temp;
}
