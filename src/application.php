<?php
namespace Vht\Src;
use Vht\Src\Http as Http;
use Vht\Src\Http\Request as Request;
use Vht\Src\Http\Response as Response;
use Vht\Src\Http\ServerRequest as ServerRequest;
use Jenssegers\Blade\Blade;
class Application{

	protected $config;

	protected $database;

	protected $app;

	protected $route;

	protected $template;

	protected $module;

	protected $request;

	protected $response;

	protected $session;
	
	public function __construct(){
		$this->app = array();
		// $this->template = new Blade('views','cache');
	}
	public function setView($viewFolder,$cache = null){
		$this->template = new Blade($viewFolder,$cache);
	}
	public function request() : Request{
		return $this->request;
	}
	public function response() : Response{
		return $this->response;
	}
	public function init($config){
		$this->config = $config;
		$this->request = new Request([
			'_get'=>$_GET,
			'_post'=>$_POST,
			'_request'=>$_REQUEST,
			'_server'=>$_SERVER]
		);

	}
	public function register($apps){
		foreach($apps as $key => $item){
			$this->app['name'][] = $key;
			$this->app[$key]['name'] = $key;
			$this->app[$key]['dir'] = $item;
		}
		
	}
	function dump($arr, $exit=1){
		echo "<pre>";
		var_dump($arr);
		echo "<pre>";
		if($exit)exit();
	}
	public function handle(){
		if(in_array($this->request->getRequestTarget(), $this->app['name'])){
			$this->module = $this->request->getRequestTarget();
		}else{
			$request_uri = explode('/', $this->request->getRequestTarget());
			$this->module = $request_uri[1];
		}
		include $this->app[$this->module]['dir']."/config.php";
		$this->database = new Database($config['database']);
		include $this->app[$this->module]['dir']."/index.php";
		// $this->config = $config;
		// $this->database = new Database($this->config['database']);
		// $this->database->query("select * from #_product limit 8");
		// $result = $this->database->fetch_array();
		// $this->database->reset();
		// $this->database->query("select * from #_product limit 8");
		// $result = $this->database->fetch_array();
		// var_dump($result);
	}
}