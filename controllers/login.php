<?php 

class Login extends Controller {
	function __construct() {
		parent::__construct();
		// Check if user is logged in
		(Session::get('loggedIn') == true) ? $this->redirect('dashboard/') : false;
	}

	function index() { $this->view->render('login/index'); }

	function login() { 
		$data = array(
			'username'	=> $_POST['username'],
			'password'	=> $this->hash($_POST['password']));
		($this->model->login($data) == true) ? $this->redirect('dashboard/') : $this->redirect('login/');
	}
}