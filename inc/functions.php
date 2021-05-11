<?php

function output($value) {
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

function authenticateUser($email, $password) {
	return $email == USER_NAME && $password == PASSWORD;
}

function redirect($url) {
	header("Location: $url");
}

function isUserAuthenticated() {
	return isset($_SESSION['email']);
}

function ensureUserIsAuthenticated() {
	if (!isUserAuthenticated()) {
		redirect('login.php');
		die();
	}
}
