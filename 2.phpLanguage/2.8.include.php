<?php
$title = 'include';

include('./../inc/header.php');
// require('./../inc/functions.php'); // show error if not found
require_once('./../inc/functions.php');

$alchemies = [
	['name' => 'Fruitarianism', 'power' => 'Energy'],
	['name' => 'Orin Therapy', 'power' => 'Healing'],
	['name' => 'Semen Retention', 'power' => 'Well Being'],
];

$res = array_column($alchemies, 'power');
?>

<h2>My Alchemy Practices</h2>

<?php
output($res);
?>

<?php include('./../inc/footer.php');
