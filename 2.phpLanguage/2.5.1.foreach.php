<?php
$title = 'foreach loop';

$alchemies = [
	'Semen Retention', 'Orin Therapy', 'Veganism', 'Fruitarianism', 'Yoga', 'Calisthenics', 'Software Development'
];

$kvpAlchemies = [
	'Semen Retention' => 'The White Horse',
	'Orin Therapy' => 'The Inner Yellow Dragon',
	'Veganism' => 'Love',
	'Fruitarianism' => 'Health, Purity and Energy',
	'Yoga' => 'Energy and Health',
	'Calisthenics' => 'Force, Health and Beauty',
	'Siftware Development' => 'Art and Money',
]
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
		foreach ($alchemies as $alc) {
			echo '<tr><td>' . $alc . '</td></tr>';
		}
		?>
	</table>

	<hr>

	<!-- with associative array  -->
	<table>
		<?php
		foreach ($kvpAlchemies as $key => $alc) {
			echo '<tr><td>' . $key . '</td><td>' . $alc . '</td></tr>';
		}
		?>
	</table>

</body>

</html>