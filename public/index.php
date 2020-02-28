<?php
namespace Vht;
include '../vendor/autoload.php';
include 'config.php';
$app = new Src\Application();
$app->init($config);
$app->register(
	[
		'/' => app_dir.'index',
		'blocks' => app_dir.'blocks',
	    'admin' => app_dir.'admin'
	]
);
$app->handle();

