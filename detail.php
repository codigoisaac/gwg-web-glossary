<?php

require('app/app.php');

if (!isset($_GET['term'])) {
	redirect('index.php');
}

$data = Data::get_term($_GET['term']); //todo: validate this

if (!$data) {
	view('not_found');
	die();
}

$view_bag = [
	'title' => "$data->term - " . GWG,
	'term' => $data->term,
];

view('detail', $data);
