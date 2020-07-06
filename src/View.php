<?php
namespace Vht\Src;

use Vht\Src\View\AbstractView as ViewEngine;
class View{
    protected $view_folder;
    protected $cache;
    protected ViewEngine $view;
    public function __construct($viewFolder,$cache = null){
        $this->view_folder = $viewFolder;
        $this->cache = $cache;
        $this->view = new ViewEngine($viewFolder,$cache);
    }
    public function getEngine(){
    	return $this->view;
    }
}