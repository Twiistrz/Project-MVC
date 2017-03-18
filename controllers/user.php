<?php 

class User extends Controller {
	function __construct() {
		parent::__construct();
		$logged = Session::get('loggedIn');
		$role 	= Session::get('role');
		if($logged == false || $role != 'developer'):
			($logged == true && $role != 'developer') ? $this->redirect('error/page_401/') : Session::destroy();
		endif;
	}

	function index() {
		$this->view->userList = $this->model->userList();
		$this->view->render('user/index');
	}

	function edit($user_id) {
		// Fetch Individual User
		$this->view->user = $this->model->userSingleList($user_id);
		$this->view->render('user/edit');
	}

	function create() {
		$data = array(
			'user_name' => $_POST['username'],
			'user_pass' => $this->hash($_POST['password']),
			'user_role' => $_POST['role']);
		$this->model->create($data);
		$this->redirect('user/');
	}

	function editSave($user_id) {
		$data = array(
			'user_id' 	=> $user_id,
			'user_name' => $_POST['username'],
			'user_pass' => $this->hash($_POST['password']),
			'user_role' => $_POST['role']);
		($data['user_pass'] == $this->hash()) ? $this->model->editSave($data) : $this->model->editSave($data, true);
		$this->redirect('user/');
	}

	function delete($user_id) {
		if($user_id == 1):
			$this->redirect('user/');
		else:
			$this->model->delete($user_id);
			$this->redirect('user/');
		endif;
	}
}