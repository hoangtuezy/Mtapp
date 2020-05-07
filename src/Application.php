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
	public function setView($viewFolder,$cache = null){
		$this->template = new AbstractView($viewFolder,$cache);
	}
	public function template() : AbstractView{
		return $this->template;
	}

}