<?php
namespace Application\Admin\Action;
use Vht\Src\Action as BaseAction;
class Route extends BaseAction{
	public function process(){
		$query_string = $this->app->request()->getQueryParams();
		$module = $this->app->module();
	}
}
// index/posts/media/photo||$action||$target