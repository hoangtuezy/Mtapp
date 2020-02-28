<?php
use Vht\Src\Application;

$com = isset($request_uri[2])?$request_uri[2]:'default';

$resolve = function(Application $app) use ($com){
    $source = 'index';
    $template = 'index';
    $app->template->render('index', ['name' => 'John Doe']);
};

$this->template->render('index', ['name' => 'John Doe']);