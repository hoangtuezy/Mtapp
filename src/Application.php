<?php
namespace Vht\Src;

use Vht\Src\View\AbstractView as View;
use Illuminate\Container\Container as Container;

class Application extends Container{
	private $name;
	public function __construct($name = null){
		$this->name = $name;
	}
	function setView($path,$cache){
		$this->instance("view",new View($path,$cache));
	}
	function getView(){
		return $this->view;
	}
	
}
