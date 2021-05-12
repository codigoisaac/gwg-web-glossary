<?php

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

function get_terms() {
	$json = get_data();
	return json_decode($json);
}

function get_term($term) {
	$terms = get_terms();

	foreach ($terms as $item) {
		if ($item->term == $term) {
			return $item;
		}
	}

	return false;
}
