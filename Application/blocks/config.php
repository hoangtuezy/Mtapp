<?php
$config['mode']= 'debug';
// $config['mode']= 'production';
$config['database']['servername'] = 'localhost';
$config['database']['username'] = 'root';
$config['database']['password'] = '';
$config['database']['database'] = 'source';
$config['database']['prefix'] = 'table_';

$config['template']['name']= 'lehuuchung_176420';



$current_directory =  $this->app[$this->module]['dir'].DIRECTORY_SEPARATOR;
$current_template = $current_directory.'templates'.DIRECTORY_SEPARATOR.$config['template']['name'].DIRECTORY_SEPARATOR;
$current_cache = $current_directory.'cache'.DIRECTORY_SEPARATOR.$config['template']['name'].DIRECTORY_SEPARATOR;
$current_assets= _public.$config['template']['name'];
