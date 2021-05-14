<?php

function get_data() {
	$fname = CONFIG['data_file'];

	$json = '';

	if (!file_exists($fname)) {
		file_put_contents($fname, '');
	} else {
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

function search_terms($search) {
	$items = get_terms();

	$results = array_filter($items, function ($item) use ($search) {
		if (
			strpos($item->term, $search) !== false ||
			strpos($item->definition, $search) !== false
		) {
			return $item;
		}
	});

	return $results;
}

require('glossaryterm.class.php');

function add_term($term, $definition) {
	$terms = get_terms();

	$terms[] = new GlossaryTerm($term, $definition);

	set_data($terms);
}

function set_data($arr) {
	file_put_contents(CONFIG['data_file'], json_encode($arr));
}

function update_term($original_term, $new_term, $new_definition) {
	$terms = get_terms();

	foreach ($terms as $item) {
		if ($item->term == $original_term) {
			$item->term = $new_term;
			$item->definition = $new_definition;
			break;
		}
	}

	set_data($terms);
}

function delete_term($term) {
	$terms = get_terms();

	for ($i = 0; $i < count($terms); $i++) {
		if ($terms[$i]->term === $term) {
			unset($terms[$i]);
			break;
		}
	}

	$new_terms = array_values($terms);

	set_data($new_terms);
}
