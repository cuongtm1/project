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
		$router->filter('auth', function(){
			if(!isset($_SESSION['user']) || $_SESSION['user']['role']<1){
				header('location:'.BASE_URL.'login');
				return false;
			}
		});

		$router->filter('login', function(){
			if(isset($_SESSION['user'])){
				header('location:'.BASE_URL);
				return false;
			}
		});
		// check login
		$router->group(['before' => 'login'], function($router){
			$router->get('login',['App\Controllers\Backend\loginController','login']);
		});
		$router->POST('login',['App\Controllers\Backend\loginController','postlogin']);
		$router->get('logout',['App\Controllers\Backend\loginController','loguot']);
		$router->group(['before' => 'auth'], function($router){
			// admin
			$router->group(['prefix'=>'admin'],function($router){
				$router->get('/', ["App\Controllers\Backend\HomeController", "index"]);
				$router->group(['prefix'=>'phu-huynh'],function($router){
					$router->get('thong-tin',['App\Controllers\Backend\ParentController','show']);
					$router->get('add',['App\Controllers\Backend\ParentController','add']);
					$router->post('add',['App\Controllers\Backend\ParentController','addPost']);
					$router->get('edit/{id}',['App\Controllers\Backend\ParentController','edit']);
					$router->post('edit/{id}',['App\Controllers\Backend\ParentController','editPost']);
					$router->get('del/{id}',['App\Controllers\Backend\ParentController','del']);
					$router->get('chi-tiet/{id}',['App\Controllers\Backend\ParentController','details']);
				});

				$router->group(['prefix'=>'Childrens'],function($router){
					$router->get('', ["App\Controllers\Backend\ChildrenController", "index"]);
					$router->get('del/{id}', ["App\Controllers\Backend\ChildrenController", "del"]);
					$router->get('FormAdd/{id}', ["App\Controllers\Backend\ChildrenController", "FormAdd"]);
					$router->post('FormAdd/{id}', ["App\Controllers\Backend\ChildrenController", "saveadd"]);
					$router->get('Formedit/{id}', ["App\Controllers\Backend\ChildrenController", "FormEdit"]);
					$router->POST('SaveEdit/{id}', ["App\Controllers\Backend\ChildrenController", "saveedit"]);
				});
				$router->group(['prefix'=>'category'],function($router){
					$router->get('', ["App\Controllers\Backend\CategoryController", "index"]);
					$router->get('del/{id}', ["App\Controllers\Backend\CategoryController", "del"]);
					$router->get('FormAdd', ["App\Controllers\Backend\CategoryController", "FormAdd"]);
					$router->POST('FormSaveAdd', ["App\Controllers\Backend\CategoryController", "FormSaveAdd"]);
					$router->get('Formedit/{id}', ["App\Controllers\Backend\CategoryController", "Formedit"]);
					$router->POST('SaveEdit/{id}', ["App\Controllers\Backend\CategoryController", "SaveEdit"]);
				});
			});


		});
		// front end
		$router->get('',['App\Controllers\Frontend\HomeController','index']);
		$router->get('tin-tuc',['App\Controllers\Frontend\NewsController','index']);
		$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());
		$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
		echo $response;
	}
}
?>