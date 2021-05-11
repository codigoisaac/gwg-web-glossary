<?php
$title = 'GET Input';

include('./../inc/header.php');

//
// $category = $_GET['category'];
// $limit = $_GET['limit'];

// get information from the URL
$category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
$limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

// if (!$category || !$limit) {
// 	// stop executing if input is invalid
// 	die();
// }

if (!$category) {
	$category = 1;
}

if (!$limit) {
	$limit = 10;
}
?>

<p>Showing category: <?= $category ?></p>
<p>Limit: <?= $limit ?></p>


<?php include('./../inc/footer.php');
