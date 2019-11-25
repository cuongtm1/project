<?php 
namespace Routes;
/**
* 
*/
use \Phroute\Phroute\RouteCollector;
use \Phroute\Phroute\Dispatcher;

class CustomRoute{

	public static function init($url){
		$router = new RouteCollector();
		$router->group(['prefix'=>'admin'],function($router){
			$router->get('/', ["App\Controllers\Backend\HomeController", "index"]);
			$router->group(['prefix'=>'phu-huynh'],function($router){
				$router->get('show',['App\Controllers\Backend\ParentController','show']);
			});
			$router->group(['prefix'=>'Childrens'],function($router){
				$router->get('', ["App\Controllers\Backend\ChildrenController", "index"]);
			});
		});
		
		// admin
		$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());
		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		echo $response;
	}
}
?>