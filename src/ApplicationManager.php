<?php
namespace Vht\Src;

class ApplicationManager{
	protected $application_manager[];
	public function __construct(){
		$this->application_manager = new \Illuminate\Container\Container;
	}
	public function register(\Vht\Src\Application $application){
		$this->application_manager->instance("app_".strtolower($application->getName()),$application);
	}
}
