<?php
$title = 'POST Input';

include('./../inc/header.php');
require_once('./../inc/functions.php');

//

// when we have multiple forms
// if (isset($_POST['login'])) {
// }

// when we have only 1 form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = filter_input(INPUT_POST, '	email', FILTER_VALIDATE_EMAIL);

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
		<label for="pass">Password:</label>
		<input type="password" name="pass" id="pass">
	</div>
	<div id="form-group">
		<!-- when we have multiple forms = submit button with name  -->
		<!-- <input type="submit" value="Login" name='login'> -->
		<!-- when we have only 1 form = submit button don't need name  -->
		<input type="submit" value="Login">
	</div>
</form>

<?php if (isset($status)) {
	echo $status;
}
?>

<?php include('./../inc/footer.php');
