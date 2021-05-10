<?php
$title = 'for loop';

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

	<?php
	for ($i = 0; $i < 10; $i++) {
		echo $i;
	}

	for ($i = 0; $i < count($alchemies); $i++) {
		echo $alchemies[$i];
	}
	?>

</body>

</html>