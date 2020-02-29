<?php
namespace Vht\Src;

use Vht\Src\View\View as ViewEngine;
class View{
    protected $view_folder;
    
    protected $cache;
    
    protected ViewEngine $view;
    public function __construct($viewFolder,$cache = null){
        $this->view_folder = $viewFolder;
        $this->cache = $cache;
        $this->init();
    }
    

    public function setView($viewFolder,$cache = null){
        $this->view = new ViewEngine($viewFolder,$cache);
    }
    
    public function assign($key,$value){
        
    }
}