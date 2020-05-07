<?php
namespace Vht\Src;
use Illuminate\Support\Facades\Response;
use Vht\Src\Http\Request;
use \Vht\Src\View\AbstractView as AbstractView;
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

	protected $filters = array();
	
	protected $view;
	public function __construct(){
		$this->app = array();
		// $this->template = new Blade('views','cache');
	}
	public function add_filter($key,$filter){
		array_push($this->filters, array($key,$filter));
	}
	public function filters(){
		return $this->filters;
	}
	public function setView($viewFolder,$cache = null){
		$this->template = new AbstractView($viewFolder,$cache);
	}
	public function template() : AbstractView{
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
			$key = md5($key);
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
		$this->dump($this);
		if(in_array($this->request->getRequestTarget(), $this->app['name'])){
			$this->module = $this->request->getRequestTarget();
		}else{
			$request_uri = explode('/', $this->request->getRequestTarget());
			$this->module = $request_uri[1];
		}
		include $this->app[$this->module]['dir']."/index.php";

	}
	
	public function run($before = [],$after = [],$calla=null){
		if(!empty($before)){
			foreach ($before as $key => $item){
				(new $item($this))->process($this);
			}
		}
		if(is_callable($calla)){
			$calla($this);
		}
	}
}