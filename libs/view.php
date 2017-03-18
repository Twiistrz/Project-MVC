<?php

class View {
	public function render($name, $no_include = false) {
		if($no_include == true):
			require 'views/'.$name.'.php';
		else:
			require 'views/header.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		endif;
	}
}