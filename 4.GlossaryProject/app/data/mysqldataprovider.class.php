<?php

class MySqlDataProvider extends DataProvider {
	function __construct($source) {
		$this->source = $source;
	}

	public function get_terms() {
		// we're passing the result of this function as a model to the view

		$db = $this->connect(); // create database connection

		if ($db == null) { // check to see if we actually have a connection
			return [];
		}

		$query = $db->query('SELECT * FROM terms');

		$data = $query->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

		$query = null;
		$db = null;

		return $data;
	}

	public function get_term($term) {
	}

	public function search_terms($search) {
	}

	public function add_term($term, $definition) {
		$db = $this->connect();

		if ($db == null) {
			return;
		}

		$sql = 'INSERT INTO terms (term, definition) VALUES (:term, :definition)';
		$smt = $db->prepare($sql); //statement obj

		$smt->execute([
			':term' => $term,
			':definition' => $definition,
		]);

		$smt = null;
		$db = null;
	}

	public function update_term($original_term, $new_term, $new_definition) {
	}

	public function delete_term($term) {
	}

	private function connect() {
		try {
			return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
		} catch (PDOException $e) {
			return null;
		}
	}
}
