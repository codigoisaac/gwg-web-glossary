<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Master Program</title>
</head>

<body>
	<div>
		<b>Welcome to PHP Master Program.</b>
		<i>This is a project made by <a href="https://campsite.bio/codigoisaac" target="_blank" noreferer>códigoisaac</a> to learn the super cool PHP programming language.</i>
	</div>

	<?php echo '<p>Hello PHP</p>'; ?>
	<?php echo '<h1>I will become a Ninja in Back End</h1>'; ?>
	<?php echo '<p>Your browser info: ' . $_SERVER['HTTP_USER_AGENT']; ?>
	<br>
	<br>
	<p>The little magic bellow is done jumping in and out of PHP mode even in the middle of a PHP block:</p>
	<?php
	if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') === false) {
	?>
		<small>
			this message will only be shown if you're not in Internet Explorer:
		</small>
		<p>Thank God you're not using Internet Explorer, right!</p>
	<?php } else { ?>
		<p>Bro, you're using Internet Explorer... why???</p>
	<?php } ?>

	<a href="./1.0.dealWForms.php">Let's deal with forms</a>
</body>

</html>