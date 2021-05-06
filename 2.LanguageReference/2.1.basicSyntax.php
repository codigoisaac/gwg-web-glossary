<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Basic Syntax</title>
</head>

<body>
	<!-- Short echo tag -->
	<h1>Short echo tag</h1>
	<?= 'This is a little string printed with a short echo tag. <br>
	BTW, the short ego tag does not work in XHTML or XML.' ?>

	<? echo 'will this work?' ?>

	<!-- Closing PHP tag in PHP only file  -->
	<h1>Closing PHP tag in <i>PHP only</i> file</h1>
	<p>If a file is composed of PHP <i>only</i>, it is recommended that the closing php tag be avoided.</p>

	<!-- Alternative If Else syntax -->
	<h1>Alternative If Else syntax</h1>
	<p>This is outputed by a conditional statement, jumping again in and out of PHP, but this time with different syntax in the code:</p>
	<?php if (true) : ?>
		Result of the condition is true. This time we're using 'if(...): ... else: ... endif; Instead of using 'if(...) {...} else {...}'
	<?php else : ?>
		Nope, false.
	<?php endif; ?>

	<!-- Semicolon and newline -->
	<h1>Semicolon and newline</h1>
	<small>this was supposed to be different. According to the docummentation we should not have a new line after a closing php tag that has a semicolon before.</small>
	<br>
	<?php echo "Some text"; ?>
	No newline
	<?= "But newline now" ?>

	<!-- Comments -->
	<h1>Comments</h1>
	<?php echo 'There is a one-line c++-style comment here <br>'; // you find me!
	echo 'And another here, this time multi line <br>';
	/* yes, I'm here, 
	you're very good at findind things! */
	echo 'And here we have a one-line comment in shell-style <br>'; # yup,here again!
	?>
</body>

</html>