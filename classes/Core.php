<?php
class Core {
	
	public function run() {
		ob_start();
		$loader = new Twig_Loader_Filesystem('../commerce/templates/');
		$twig = new Twig_Environment($loader);
		require_once(Url::getPage());
		ob_get_flush();
	}

}