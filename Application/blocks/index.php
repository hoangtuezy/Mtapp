<?php
error_reporting(E_ALL);
include __DIR__.'/config.php';
use Vht\Src\Database as Database;

$db = new Database();
$db->init($this->config['database']);
$db->connect();

if(!$config['mode'] !== 'production'){ 
	if(!is_dir($current_cache)){
		mkdir($current_cache);
		chmod($current_cache,01777);
	} 
	if(!is_dir($current_template)){
		mkdir($current_template);
		chmod($current_template,01777);
	}
}
$app->setView($current_template,$current_cache);
define('_assets',$config['template']['name'].'/');

if(!isset($request_uri[2])){
	$com = 'index';
}else{
	$com = $request_uri[2];
}
$white_com_list = [
	'san-pham',
	'lien-he',
	'gioi-thieu',
	'tin-tuc'
];
$this->template->share('db',$db);

if($com==='index'){
	$index_gioithieu = array(
		'ten_vi' => "Nội Thất Minh Nhật"
	);
	$db->reset();
	$db->query("select * from #_setting");
	$row_setting = $db->result_array();



	echo $this->template->render('index', [
		'row_setting' => $row_setting,
	]);
	die();
}	