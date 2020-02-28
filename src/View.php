<?php
namespace Vht\Src;

use Jenssegers\Blade\Blade;

class View{
    protected $view_folder;
    
    protected $cache;
    
    protected Blade $view;
    public function __construct($viewFolder,$cache = null){
        $this->view_folder = $viewFolder;
        $this->cache = $cache;
        $this->init();
    }
    

    public function setView($viewFolder,$cache = null){
        $this->view = new Blade($viewFolder,$cache);
    }
    
    public function assign($key,$value){
        
    }
}