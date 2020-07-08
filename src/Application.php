<?php
namespace Vht\Src;
class Application{

	protected \Illuminate\Container\Container $container;
	protected Vht\Src\View\AbstractView $view;
	public String $name;
	function __construct(String $name)
	{
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
}
