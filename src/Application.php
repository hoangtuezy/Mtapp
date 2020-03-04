<?php
namespace Vht\Src;
use Illuminate\Support\Facades\Response;
use Vht\Src\Http\Request;
use \Vht\Src\View\View as View;
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
	
	protected $model = array();
	
	protected $view;
	public function __construct(){
		$this->app = array();
		// $this->template = new Blade('views','cache');
	}
	public function setView($viewFolder,$cache = null){
		$this->template = new View($viewFolder,$cache);
	}
	public function template() : View{
		return $this->template;
	}
	public function request() : Request{
		return $this->request;
	}
	public function response() : Response{
		return $this->response;
	}
	public function module() {
		return $this->module;
	}
	public function session() {
		return $this->session;
	}
	public function init($config){
		$this->config = $config;
		$this->request = new Request([
			'_get'=>$_GET,
			'_post'=>$_POST,
			'_request'=>$_REQUEST,
			'_server'=>$_SERVER]
		);
		if(empty(session_id())){
			$this->session = array();
		}else{
			$this->session = $_SESSION;
		}

	}
	public function register($apps){
		foreach($apps as $key => $item){
			$this->app['name'][] = $key;
			$this->app[$key]['name'] = $key;
			$this->app[$key]['dir'] = $item;
		}
		
	}

	public function setup(){
		foreach($this->app['name'] as $name){
			$dir = $this->app[$name]['dir'];
			$basename_dir = basename($dir);
		}
	}

	public function dump($arr, $exit=1){
		echo "<pre>";
		var_dump($arr);
		echo "<pre>";
		if($exit)exit();
	}
	public function set_database($data){
		if(empty($this->database)){
			$this->database = new Database();
		}
		$this->database->set_database($data);
	}
	public function handle(){
		if(in_array($this->request->getRequestTarget(), $this->app['name'])){
			$this->module = $this->request->getRequestTarget();
		}else{
			$request_uri = explode('/', $this->request->getRequestTarget());
			$this->module = $request_uri[1];
		}
		
		
		include $this->app[$this->module]['dir']."/index.php";


	}
	
	public function run($before = [],$after = []){
		if(!empty($before)){
			foreach ($before as $key => $item){
				(new $item())->process($this);
			}
		}

	}
}