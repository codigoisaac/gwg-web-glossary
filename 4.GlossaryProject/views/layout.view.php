<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>
		<?php
		if (isset($view_bag['title'])) {
			echo $view_bag['title'];
		} else {
			echo '404';
		}
		?>
	</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/php-fundamentals.css" rel="stylesheet" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<div class="navbar-brand" href="#">
				<?php
				if (isset($view_bag['title'])) {
					echo $view_bag['title'];
				} else {
					echo '404';
				}
				?>
			</div>
		</div>
	</nav>

	<?php require("$name.view.php"); ?>

</body>

</html>