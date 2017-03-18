<?php

// Controllers is for application logics
class Controller {
	function __construct() { $this->view = new View(); }

	public function loadModel($name) {
		$path = 'models/'.$name.'_model.php';
		if(file_exists($path)):
			require $path;
			$modelName = $name.'_Model';
			$this->model = new $modelName();
		endif;
	}

	function redirect($url) {
		header('Location: '.HTTPHOST.$url);
		exit;
	}

	function hash($data = '') { return hash('SHA256', $data); }
}