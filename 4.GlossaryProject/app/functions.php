<?php

function view($name, $model) {
	global $view_bag;
	require("views/layout.view.php");
}


function get_data() {
	$fname = CONFIG['data_file'];

	$json = '';

	if (!file_exists($fname)) {
		// $handle = fopen($fname, 'w+');
		// fclose($handle);
		file_put_contents($fname, '');
	} else {
		// $handle = fopen($fname, 'r');
		// $json = fread($handle, filesize($fname));
		// fclose($handle);
		$json = file_get_contents($fname);
	}

	return $json;
}
