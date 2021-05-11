<?php
session_start();

$title = 'Sessions';

require_once('./../../inc/config.php');
require_once('./../../inc/functions.php');

//

if (isUserAuthenticated()) {
	redirect('admin.php');
	die();
}

// when we have only 1 form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = $_POST['password']; //todo: validate this!

	// compare with data store
	if (authenticateUser($email, $password)) {
		$_SESSION['email'] = $email;
		redirect('admin.php');
		die();
	} else {
		$status = "The provided credentials did not work.";
	}

	if (!$email) {
		$status = 'Please enter a valid email address.';
	}
}

?>

<form action="" method="POST">
	<div id="form-group">
		<label for="email">Email:</label>
		<input type="text" name="email" id="email">
	</div>
	<div id="form-group">
		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
	</div>
	<div id="form-group">
		<input type="submit" value="Login">
	</div>
</form>

<?php if (isset($status)) {
	echo $status;
}

include('./../../inc/header.php');
include('./../../inc/footer.php');
