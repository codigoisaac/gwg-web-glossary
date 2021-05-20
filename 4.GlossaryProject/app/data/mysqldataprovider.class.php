<?php

class MySqlDataProvider extends DataProvider {
	function __construct($source) {
		$this->source = $source;
	}

	public function get_terms() {
		// we're passing the result of this function as a model to the view
		return $this->query('SELECT * FROM terms');
	}

	public function get_term($term) {
		$db = $this->connect();

		if ($db == null) {
			return; // not found
		}

		$sql = 'SELECT * FROM terms WHERE id = :id';
		$smt = $db->prepare($sql); //statement obj

		$smt->execute([
			':id' => $term,
		]);

		$data = $smt->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

		if (empty($data)) {
			return;
		}

		$smt = null;
		$db = null;

		return $data[0];
	}

	public function search_terms($search) {
		return $this->query(
			'SELECT * FROM terms WHERE term LIKE :search OR definition LIKE :search',
			[':search' => '%' . $search . '%']
		);
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
		$db = $this->connect();

		if ($db == null) {
			return;
		}

		$sql = 'UPDATE terms SET term = :term, definition = :definition WHERE id = :id';
		$smt = $db->prepare($sql);

		$smt->execute([
			':term' => $new_term,
			':definition' => $new_definition,
			':id' => $original_term
		]);

		$smt = null;
		$db = null;
	}

	public function delete_term($term) {
		$db = $this->connect();

		if ($db == null) {
			return;
		}

		$sql = 'DELETE FROM terms WHERE id = :id';
		$smt = $db->prepare($sql);

		$smt->execute([
			':id' => $term
		]);

		$smt = null;
		$db = null;
	}

	private function connect() {
		try {
			return new PDO($this->source, CONFIG['db_user'], CONFIG['db_password']);
		} catch (PDOException $e) {
			return null;
		}
	}

	private function query($sql, $sql_params = []) {
		$db = $this->connect(); // create database connection

		if ($db == null) { // check if we actually have a connection
			return [];
		}

		$query = null;

		if (empty($sql_params)) {
			$query = $db->query($sql);
		} else {
			$query = $db->prepare($sql);
			$query->execute($sql_params);
		}

		$data = $query->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

		$query = null;
		$db = null;

		return $data;
	}
}
