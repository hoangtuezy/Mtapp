<?php
namespace Vht\Src;
use Vht\Src\Http as Http;
use Vht\Src\Http\Request as Request;
use Vht\Src\Http\Response as Response;
use Vht\Src\Http\ServerRequest as ServerRequest;
class Application{
	protected $config;
	protected $database;
	public function __construct(){
		
	}
	public function request() : Request{
		return $this->request;
	}
	public function response() : Response{
		return $this->response;
	}
	public function init(){
		$this->request = new ServerRequest([
			'_get'=>$_GET,
			'_post'=>$_POST,
			'_request'=>$_REQUEST,
			'_server'=>$_SERVER]
		);
	}
	public function handle($config){
		$this->config = $config;
		$this->database = new Database($this->config['database']);
		$this->database->query("select * from #_product limit 8");
		$result = $this->database->fetch_array();
		$this->database->reset();
		$this->database->query("select * from #_product limit 8");
		$result = $this->database->fetch_array();
		var_dump($result);
	}
}