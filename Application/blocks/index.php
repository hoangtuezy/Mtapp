<?php
$this->setView(__DIR__.'/templates',__DIR__.'/cache');


if(!isset($request_uri[2])){
	$index_gioithieu = array(
		'ten_vi' => "Nội Thất Minh Nhật"
	);
	echo $this->template->render('index', ['index_gioithieu' => $index_gioithieu]);
}else{
	$com = $request_uri[2];
}
	