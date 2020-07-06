<?php
include 'vendor/autoload.php';
define('DS',DIRECTORY_SEPARATOR);
define('APP',__DIR__.DS);
use Vht\Src\View as View;
$view = new View(__DIR__.DS."views",__DIR__.DS."views/@cache");
$view = $view->getEngine();
echo $view->render('app', ['name' => 'John Doe']);
?>
