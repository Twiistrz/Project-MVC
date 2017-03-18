<?php

class Dashboard_Model extends Model {
	function __construct() { parent::__construct(); }

	function ajaxInsert() {
		$text = $_POST['text'];
		$stmt = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
		$stmt->execute(array(':text' => $text));

		$data = array(
			'id'	=> $this->db->lastInsertId(), // Last Insert ID
			'text'	=> $text);
		echo json_encode($data);
	}

	function ajaxGetList() {
		$stmt = $this->db->prepare('SELECT * FROM data ORDER BY id DESC');
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo ($stmt->rowCount() > 0) ? json_encode($row) : json_encode(0);
	}

	function ajaxDeleteList() {
		$id = $_POST['id'];
		$stmt = $this->db->prepare('DELETE FROM data WHERE id = :id');
		$stmt->execute(array(':id' => $id));
	}
}