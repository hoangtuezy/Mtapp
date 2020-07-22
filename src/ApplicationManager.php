<?php
namespace Vht\Src;
use Illuminate\Container\Container as Container;
use Vht\Src\Application;

class ApplicationManager{
	private $application_manager;
	function __construct(){
		$this->application_manager = new Container;
	}

	function register($app_name,$cl = null){
		if(is_null($cl))
			return $this->application_manager->instance($app_name,new Application);
		else
			return $this->application_manager->singleton($app_name,$cl);
	}
	function get($app_name) : \Vht\Src\Application{
		return $this->application_manager->$app_name;
	}
}
