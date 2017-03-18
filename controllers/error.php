<?php

class Error extends Controller {
	function __construct() { parent::__construct(); }

	function index() {
		$this->redirect('error/page_404/');
	}

	function page_404($data = false) {
		(!empty($data)) ? $this->redirect('error/page_404/') : $this->view->render('error/index');
	}

	function page_401($data = false) {
		(!empty($data)) ? $this->redirect('error/page_401/') : $this->view->render('error/401');
	}
}