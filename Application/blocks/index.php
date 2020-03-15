<?php
error_reporting(E_ALL);
include __DIR__.'/config.php';
$d->init($this->config['database']);
$d->connect();

if(!$config['mode'] !== 'production'){ 
	if(!is_dir($current_cache)){
		mkdir($current_cache);
		chmod($current_cache,01777);
	} 
	if(!is_dir($current_template)){
		mkdir($current_template);
		chmod($current_template,01777);
	}
	if(!is_dir($current_assets)){
		mkdir($current_assets);
		chmod($current_assets,01777);
	}

}
$app->setView($current_template,$current_cache);
define('_assets',basename(_public.$config['template']['name'].'/'));

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
$lang = 'vi';
$this->template->share('d',$d);
$this->template->share('lang',$lang);
if($com==='index'){
	$index_gioithieu = array(
		'ten_vi' => "Nội Thất Minh Nhật"
	);
	$d->reset();
	$d->query("select * from #_setting");
	$row_setting = $d->fetch_array();
	echo $this->template->render('index', [
		'row_setting' => $row_setting,
	]);
	die();
}	