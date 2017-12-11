<?php
require_once('inc/config.php');
require_once('vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('../commerce/templates/');

$twig = new Twig_Environment($loader);

$core = new Core();

$core->run();
