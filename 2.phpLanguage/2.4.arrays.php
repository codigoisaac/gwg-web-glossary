<?php

$alchemy1 = 'Semen Retention';
$alchemy2 = 'Shimvabu';
$alchemy3 = 'Frutarianism';

// traditional array
$alchemies = ['Semen Retention', 'Shimbavu', 'Frutarianism', 'Yoga'];

echo $alchemies . '<br>';

print_r($alchemies);

echo '<br>';

echo $alchemies[3] . '<br>';

if (isset($alchemies[4])) {
	echo $alchemies[4];
} else {
	echo 'Alchemy not set <br>';
}

// associative array
$techSkills = [
	'logic' => 'the soul of programming',
	'algorithms' => 'the real magic',
	'html' => 'the content structure',
	'css' => 'styling and beauty',
	'javascript' => 'controlling the page',
	'jquery' => 'better javascript',
	'sass' => 'better css',
	'bootstrap' => 'easier layouts',
	'react' => 'the real front end work',
	'redux' => 'managing state',
	'php' => 'server-sede coding',
	'mysql' => 'database magic',
];

echo $techSkills['php'] . '<br>';

if (isset($techSkills['mysql'])) {
	echo $techSkills['mysql'];
} else {
	echo 'Tech Skill not yet learned <br>';
}
