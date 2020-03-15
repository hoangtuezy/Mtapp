<?php
namespace Application\Admin;
$config['database']['servername'] = 'localhost';
$config['database']['username'] = 'root';
$config['database']['password'] = '';
$config['database']['database'] = 'source';
$config['database']['prefix'] = 'table_';


$before_filter = [
	'route'=> Action\Route::class,
];
$after_filter = [
	
];