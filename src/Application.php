<?php
	namespace Tuezy;
	
	use Illuminate\Container\Container;
	use Tuezy\Core\View;
	use Illuminate\Config\Repository;
	use Illuminate\Http\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
	use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
	use Illuminate\Events\Dispatcher;
	use Illuminate\Routing\Router;
	use Illuminate\Routing\Redirector;
	use Illuminate\Routing\UrlGenerator;
	
	class Application extends Container {
		protected $view;
		protected $controller;
		protected $model;
		protected $request;
		protected $response;
		protected $session;
		protected $cookie;
		protected $event;
		protected $router;
		protected $globalMiddleware;
		protected $routes;
		
		public function __construct()
		{
			$this->instance('app', Container::getInstance());
		}
		
		public function init($component){
			$request = Request::capture();
			$app = $this;
			$this->instance('app', $this);
			$this->instance('request', $request);
			
			$this->bindIf('view', function() use ($component){
				return new View($component['view_path'], $component['view_cache']);
			});
			$this->bindIf('config', function() use ($component){
				return new Repository(array_merge(is_array($component['configs'])? $component['configs'] : [] , include __DIR__.DIRECTORY_SEPARATOR.'Config/app.php'));
			});
			
			$this->bindIf('disk', function() use ($component, $app){
				$files = new \Illuminate\Filesystem\Filesystem();
				$manager = new \Illuminate\Filesystem\FilesystemManager($app);
				return $manager->disk('local');
			});
			$this->bindIf('event', function() use ($app){
				return new Dispatcher($app);
			});
			
			$this->bindIf('router', function() use ($app){
				$router= new Router($app->get('event') ?? new Dispatcher($app), $app);
				return $router;
			});
			
			$this->bindIf('session', function(){
				return new Session(new NativeSessionStorage(), new AttributeBag());
			});
			
			$this->bindIf('redirect', function($app){
				return new Redirector(new UrlGenerator($app->router->getRoutes(), $app-request));
			});
			
			foreach ($component['route_middleware'] as $key => $middleware) {
				$this->router->aliasMiddleware($key, $middleware);
			}
			
			$this->globalMiddleware = $component['global_middleware'];
			$this->routes = $component['routes'];
		}
		
		public function run(){
			$app  = $this;
			$request = $this->get('request');
			$event = new Dispatcher($this);
			$router = new Router($event, $this);
			include 'helper.php';
			foreach($this->routes as $route){
				include $route;
			}
			
			$response = (new \Illuminate\Pipeline\Pipeline($this))
				->send($request)
				->through($this->globalMiddleware)
				->then(function ($request) use ($router) {
					return $router->dispatch($request);
				});
			 $response->send();
		}
		
		public function __call($name, $arguments)
		{
			return $this->get($name);
		}
	}