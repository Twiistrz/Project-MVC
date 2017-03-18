<?php

class User_Model extends Model {
	function __construct() { parent::__construct(); }

	function userList() {
		$stmt = $this->db->prepare('SELECT user_id, user_name, user_role FROM users ORDER BY user_id DESC');
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function userSingleList($user_id) {
		$stmt = $this->db->prepare('SELECT user_id, user_name, user_role FROM users WHERE user_id = :user_id LIMIT 1');
		$stmt->execute(array(':user_id' => $user_id));
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	function create($data) {
		$stmt = $this->db->prepare('INSERT INTO users (user_name, user_pass, user_role) VALUES (:username, :password, :role)');
		$stmt->execute(array(
			':username'	=> $data['user_name'],
			':password'	=> $data['user_pass'],
			':role'		=> $data['user_role']));
	}

	function editSave($data, $changepass = false) {
		if($changepass == false):
			$stmt = $this->db->prepare('UPDATE users SET user_name = :username, user_role = :role WHERE user_id = :userid');
			$stmt->execute(array(
				':userid'	=> $data['user_id'],
				':username'	=> $data['user_name'],
				':role'		=> $data['user_role']));
		else:
			$stmt = $this->db->prepare('UPDATE users SET user_name = :username, user_pass = :password, user_role = :role WHERE user_id = :userid');
			$stmt->execute(array(
				':userid'	=> $data['user_id'],
				':username'	=> $data['user_name'],
				':password'	=> $data['user_pass'],
				':role'		=> $data['user_role']));
		endif;
	}

	function delete($user_id) {
		$stmt = $this->db->prepare('DELETE FROM users WHERE user_id = :user_id');
		$stmt->execute(array(':user_id' => $user_id));
	}
}