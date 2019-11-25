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
				$router->get('del/{id}', ["App\Controllers\Backend\ChildrenController", "del"]);
				// $router->get('FormAdd', ["App\Controllers\Backend\ChildrenController", "FormAdd"]);
				// $router->POST('SaveAdd', ["App\Controllers\Backend\ChildrenController", "saveadd"]);
				$router->get('Formedit/{id}', ["App\Controllers\Backend\ChildrenController", "FormEdit"]);
				$router->POST('SaveEdit/{id}', ["App\Controllers\Backend\ChildrenController", "saveedit"]);
			});

			

			$router->group(['prefix'=>'category'],function($router){
				$router->get('', ["App\Controllers\Backend\CategoryController", "index"]);
				$router->get('del/{id}', ["App\Controllers\Backend\CategoryController", "del"]);
				$router->get('FormAdd', ["App\Controllers\Backend\CategoryController", "FormAdd"]);
				$router->POST('FormSaveAdd', ["App\Controllers\Backend\CategoryController", "FormSaveAdd"]);
				$router->get('Formedit/{id}', ["App\Controllers\Backend\CategoryController", "Formedit"]);
				$router->POST('FormSaveEdit/{id}', ["App\Controllers\Backend\CategoryController", "FormSaveEdit"]);
			});








		});
		
		// admin
		$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());
		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		echo $response;
	}
}
?>