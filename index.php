<?php
include 'vendor/autoload.php';
define('DS',DIRECTORY_SEPARATOR);
define('APP',__DIR__.DS);
use Vht\Src\View\AbstractView as View;
$view = new View(__DIR__.DS."views",__DIR__.DS."views/@cache");

$ioc = new \Illuminate\Container\Container;
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$ioc->instance('Symfony\Component\HttpFoundation\Request', $request);

$ioc->instance('view',$view);
$ioc->singleton(
    'PDO',
    function () {

        $db = new \PDO('mysql:dbname=nina;host=localhost', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("SET NAMES 'UTF8'");

        return $db;
    }
);
echo('<pre>');
var_dump($request->getPathInfo());
echo('</pre>');
foreach ($ioc->PDO->query("select * from table_product ") as $row) {
    print $row['ten_vi'] . "\t";
  
}
use Application\App;
$app = new App($ioc);
?>
