<?php

$title = 'Hello, MVC!';

require('functions.php');

$viewBag = [];
$viewBag['title'] = 'This is the Title';

view('index', $title);
