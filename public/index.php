<?php
namespace Vht;
date_default_timezone_set('Asia/Ho_Chi_Minh');
define("_root",realpath('../').'/');
define("_public",_root."public/");
define("_application",_root."application/");
error_reporting(E_ALL);
include '../vendor/autoload.php';
include _public.'config.php';

$app = new Src\Application();

$app->init($config); //load configs

$app->register(
	[
		'/' => _application.'index',
		'blocks' => _application.'blocks',
	    'admin' => _application.'admin'
	]
);
$app->setup();
$app->handle();

