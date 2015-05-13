<?php

$app = new S();
$app->twig = new Twig_Environment(
	new Twig_Loader_Filesystem(DIR_TEMPLATES), 
	[
		'cache' => DIR_CACHE,
		'debug' => IS_DEBUGGING
	]
);

require DIR_CONFIG . DS . 'routes.php';

$app->run();