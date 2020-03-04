<?php
namespace Vht\Application\Admin\Action;
class Route{
	public function process($app){
		$request_uri = $app->request()->getQueryParams();
		$module = $app->module();

		$app->dump($request_uri);
	}
}