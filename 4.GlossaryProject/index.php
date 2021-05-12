<?php

require('app/app.php');

$view_bag = [
	'title' => 'Glossary Project'
];

view('index', get_terms());
