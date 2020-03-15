<?php
namespace Application\Admin\Controllers;


class BaseController
{
	public function get_all_method(){
		return get_class_methods($this);
	}
	
}