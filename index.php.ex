<?php
	define('ROOT', realpath(__DIR__));
	define('DS', DIRECTORY_SEPARATOR);
	
	include ROOT.DS.'vendor/autoload.php';
	
	$app = new \Tuezy\Application();
	$app->init(
		[
			'view_path' => ROOT . DS .'views',
			'view_cache' => ROOT . DS .'views/@cache',
			'storage_path' => ROOT . DS .'storage',
			'configs' => [
			
			],
			'global_middleware' => [
			
			],
			'route_middleware' => [
			
			],
			'routes' => [
			
			]
		]
	);
	
	$app->run()->send();