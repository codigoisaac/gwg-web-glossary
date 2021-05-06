<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Master Program</title>
</head>

<body>
	<!-- Intro  -->
	<div>
		<h1>Welcome to PHP Master Program.</h1>
		<i>This is a project made by <a href="https://campsite.bio/codigoisaac" target="_blank" noreferer>códigoisaac</a> to learn the super cool PHP programming language.</i>
		<br>
		<i>This project is made by following the PHP official documentation at <a href="https://php.net" target="_blank" noreferer>php.net</a>.</i>
	</div>

	<h1>echo</h1>
	<?php echo '<p>Hello PHP</p>'; ?>
	<h1>echo with variable ($_SERVER)</h1>
	<?php echo '<p>Your browser info: ' . $_SERVER['HTTP_USER_AGENT']; ?>

	<!-- In out of PHP  -->
	<h1>Rendering HTML out of PHP tags but following PHP logic</h1>
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
	<b>For outputting large blocks of text, dropping out of PHP parsing mode is generally more efficient than sending all of the text through echo or print.
	</b>

	<br><br><br>
	-----
	<h5>Sub-Section: <a href="./1.0.dealWForms.php">Dealing with forms</a></h5>
	<h4>Next section: <a href="./2.basicSyntax.php">Basic Syntax</a></h4>
</body>

</html>