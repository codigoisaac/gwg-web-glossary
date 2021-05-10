<?php
$title = 'functions';

function sum($a, $b) {
	return $a + $b;
}

$result = sum(1, 2);

$alchemies = [
	'Semen Retention', 'Orin Therapy', 'Veganism', 'Fruitarianism', 'Yoga', 'Calisthenics', 'Software Development'
];

function output($value) {
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}
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
	// echo '<pre>';
	// print_r($alchemies);
	// echo '</pre>';
	output($alchemies);
	?>

</body>

</html>