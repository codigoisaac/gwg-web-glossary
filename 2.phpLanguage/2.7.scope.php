<?php
$title = 'functions';

function why() {
	// ain't gonna work, global variables must be brought to functions
	// echo $title;
	global $title, $anotherGlobalVariable, $andAnother;
	echo $title;
}

$alchemies = [
	['name' => 'Fruitarianism', 'power' => 'Energy'],
	['name' => 'Orin Therapy', 'power' => 'Healing'],
	['name' => 'Semen Retention', 'power' => 'Well Being'],
];

// $alcPowers = array_column($alchemies, 'power');
// $alcNames = array_column($alchemies, 'name');

function pluck($arr, $key) {
	$results = array_map(function ($item) use ($key) {
		return $item[$key];
	}, $arr);
	return $results;
}

$res = pluck($alchemies, 'power');

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
	output($res);
	?>

</body>

</html>