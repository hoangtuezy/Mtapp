<?php
error_reporting(E_ALL);
use Vht\Src\Database as Database;
$app = $this;
$database = new Database();
$database->init($this->config['database']);
$database->connect();
var_dump($app);
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

if($com==='index'){
	$index_gioithieu = array(
		'ten_vi' => "Nội Thất Minh Nhật"
	);
	echo $this->template->render('index', ['index_gioithieu' => $index_gioithieu]);
	die();
}	