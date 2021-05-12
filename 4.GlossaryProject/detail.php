<?php

require('app/app.php');

if (!isset($_GET['term'])) {
	redirect('index.php');
}

$data = get_term($_GET['term']); //todo: validate this

if (!$data) {
	view('not_found');
	die();
}

$view_bag = [
	'title' => "Glossary Project - $data->term details",
	'term' => $data->term,
];

view('detail', $data);
