<?php
$title = 'while loop';

$alchemies = [
	'Semen Retention', 'Orin Therapy', 'Veganism', 'Fruitarianism', 'Yoga', 'Calisthenics', 'Software Development'
];
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
</head>

<body>
	<h1><?= $title ?></h1>

	<h2>My Alchemy Practices</h2>

	<!-- with traditional array  -->
	<table>
		<?php

		$i = 0;
		while ($i < count($alchemies)) {
			echo $alchemies[$i];
			$i++;
		}
		?>
	</table>

</body>

</html>