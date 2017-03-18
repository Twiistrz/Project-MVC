<?php

class Login_Model extends Model {
	public function __construct() { parent::__construct(); }

	public function login($data) {
		$stmt = $this->db->prepare('SELECT * FROM users WHERE user_name = :username AND user_pass = :password');
		$stmt->execute(array(
			':username' => $data['username'],
			':password'	=> $data['password']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		// Check if user exists
		if($stmt->rowCount() > 0) :
			// Success
			Session::set('role', $row['user_role']);
			Session::set('name', $row['user_name']);
			Session::set('loggedIn', true);
			return true;
		endif;
		return false;
	}
}