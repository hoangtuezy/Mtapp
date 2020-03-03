<?php
namespace Vht;
error_reporting(E_ALL);
include '../vendor/autoload.php';
include 'config.php';

$app = new Src\Application();

$app->init($config);

$app->register(
	[
		'/' => _application.'index',
		'blocks' => _application.'blocks',
	    'admin' => _application.'admin'
	]
);
$app->setup();

$app->handle();

