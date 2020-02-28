<?php
$this->setView(__DIR__.'/templates',__DIR__.'/cache');


if(!isset($request_uri[2])){
	echo $this->template->render('index', ['name' => 'John Doe']);
}else{
	$com = $request_uri[2];
}
	