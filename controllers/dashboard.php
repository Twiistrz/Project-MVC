<?php 

class Dashboard extends Controller {
	function __construct() {
		parent::__construct();
		// Check if user is logged in
		(Session::get('loggedIn') == false) ? Session::destroy() : false;
	}

	function index() {
		$this->view->js = array('assets/js/dashboard.js');
		$this->view->render('dashboard/index');
	}

	function logout() { Session::destroy(); }

	function ajaxInsert() { $this->model->ajaxInsert(); }

	function ajaxGetList() { $this->model->ajaxGetList(); }

	function ajaxDeleteList() { $this->model->ajaxDeleteList(); }
}