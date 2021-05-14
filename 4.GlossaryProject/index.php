<?php

require('app/app.php');

$view_bag = [
	'title' => 'Glossary Project'
];

$data = new FileDataProvider(CONFIG['data_file']);

if (isset($_GET['search'])) {
	$items = $data->search_terms($_GET['search']);
} else {
	$items = $data->get_terms();
}

view('index', $items);
