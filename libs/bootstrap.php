<?php

class Bootstrap {
	function __construct() {
		$_GET['url'] = (!isset($_GET['url']) || empty($_GET['url'])) ? 'index' : $_GET['url'];
		$url = explode('/', rtrim($_GET['url'], '/'));
		// print_r($url); for debugging use this
		$file = 'controllers/'.$url[0].'.php';
		(file_exists($file)) ? require $file : Controller::redirect('error/');

		// Check if class exists
		if(class_exists($url[0])):
			$controller = new $url[0];
			$controller->loadModel($url[0]);
		else:
			Controller::redirect('error/');
		endif;

		// Calling Methods
		if(isset($url[2])):
			(method_exists($controller, $url[1])) ? $controller->{$url[1]}($url[2]) : Controller::redirect('error/');
		else:
			if(isset($url[1])):
				(method_exists($controller, $url[1])) ? $controller->{$url[1]}() : Controller::redirect('error/');
			else:
				$controller->index();
			endif;
		endif;
	}
}