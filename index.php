<?php
namespace Vht;
include 'vendor/autoload.php';
include 'config.php';

$app = new Src\Application();
$app->init();
$app->handle($config);