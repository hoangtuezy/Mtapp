<?php
namespace Application\Admin;
include _application."admin/config.php";
$app->set_database(
    [
    'servername'=>'localhost',
    'username'=>'root',
    'password'=>'',
    'database'=>'source'
    ]
    );

// $this->set_auto_model(true);

$app->run($before_filter,$after_filter,function($app){});

