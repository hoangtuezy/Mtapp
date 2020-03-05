<?php
namespace Vht\Application\Admin\Action;
class Route{
	public function process($app){
		$query_string = $app->request()->getQueryParams();
		$module = $app->module();

		$app->dump($query_string);
	}
}