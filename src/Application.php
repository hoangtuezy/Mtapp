<?php
namespace Vht\Src;

use Vht\Src\View\AbstractView as View;
use Illuminate\Container\Container as Container;

class Application{
	private Container $app;
	private View $view;
	private String $name;
	public function __construct($name = null){
		$this->name = $name;
	}
	public function setView($path,$cache){
		$this->view = new View($path,$cache);
	}
}