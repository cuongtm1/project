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
			if(!isset($_SESSION['user'])){
				header('location:'.BASE_URL.'login');
				return false;
			}
			if($_SESSION['user']['role']<1){
				header('location:'.BASE_URL.'phu-huynh');
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
		// forgot password
		$router->post('forgotpassword',['App\Controllers\Backend\loginController','forgot']);
		$router->get('forgotpassword/{token}',['App\Controllers\Backend\loginController','getforgotPassword']);
		$router->post('confirmpassword',['App\Controllers\Backend\loginController','confirmpassword']);
		// end forgot
		$router->group(['before' => 'auth'], function($router){
			// admin
			$router->group(['prefix'=>'admin'],function($router){
				$router->get('/', ["App\Controllers\Backend\HomeController", "index"]);
				$router->get('setting', ["App\Controllers\Backend\HomeController", "setting"]);
				$router->post('setting', ["App\Controllers\Backend\HomeController", "postSetting"]);


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
					$router->get('Detail/{id}', ["App\Controllers\Backend\ChildrenController", "Detail"]);
				});
				$router->group(['prefix'=>'tin-tuc'],function($router){
					$router->get('danh-sach',["App\Controllers\Backend\NewsController", "index"]);
					$router->get('del/{id}',["App\Controllers\Backend\NewsController", "delNews"]);
					$router->get('add',["App\Controllers\Backend\NewsController", "addNews"]);
					$router->post('add',["App\Controllers\Backend\NewsController", "addNewsPost"]);
					$router->get('edit/{id}',["App\Controllers\Backend\NewsController", "editNews"]);
					$router->post('edit/{id}',["App\Controllers\Backend\NewsController", "postEditNews"]);

				});
				$router->group(['prefix'=>'activate'],function($router){
					$router->get('', ["App\Controllers\Backend\ActivateController", "index"]);
					$router->get('/add', ["App\Controllers\Backend\ActivateController", "add"]);
					$router->get('del/{id}', ["App\Controllers\Backend\ActivateController", "del"]);
					$router->post('/add', ["App\Controllers\Backend\ActivateController", "postadd"]);
					$router->get('edit/{id}', ["App\Controllers\Backend\ActivateController", "edit"]);
					$router->post('edit/{id}', ["App\Controllers\Backend\ActivateController", "postEdit"]);
					$router->get('pending/{id}', ["App\Controllers\Backend\ActivateController", "pending"]);
					$router->get('pending/confirm/{id}', ["App\Controllers\Backend\ActivateController", "confirm"]);
					$router->get('pending/delconfirm/{id}', ["App\Controllers\Backend\ActivateController", "delconfirm"]);
					$router->get('join/{id}',["App\Controllers\Backend\ActivateController", "join"]);
					$router->get('pending/del/{id}', ["App\Controllers\Backend\ActivateController", "del123"]);
				});
				$router->group(['prefix'=>'category'],function($router){
					$router->get('', ["App\Controllers\Backend\CategoryController", "index"]);
					$router->get('del/{id}', ["App\Controllers\Backend\CategoryController", "del"]);
					$router->get('FormAdd', ["App\Controllers\Backend\CategoryController", "FormAdd"]);
					$router->POST('FormSaveAdd', ["App\Controllers\Backend\CategoryController", "FormSaveAdd"]);
					$router->get('Formedit/{id}', ["App\Controllers\Backend\CategoryController", "Formedit"]);
					$router->POST('SaveEdit/{id}', ["App\Controllers\Backend\CategoryController", "SaveEdit"]);
				});
				$router->group(['prefix'=>'class'],function($router){
					$router->get('', ["App\Controllers\Backend\lopController", "index"]);
					$router->get('Formedit/{id}', ["App\Controllers\Backend\lopController", "Formedit"]);
					$router->POST('SaveEdit/{id}', ["App\Controllers\Backend\lopController", "SaveEdit"]);
					$router->get('FormAdd', ["App\Controllers\Backend\lopController", "FormAdd"]);
					$router->POST('FormSaveAdd', ["App\Controllers\Backend\lopController", "FormSaveAdd"]);
					$router->get('del/{id}', ["App\Controllers\Backend\lopController", "del"]);
					$router->get('detail/{id}', ["App\Controllers\Backend\lopController", "detail"]);
					$router->get('delchildren/{id}/{id_class}', ["App\Controllers\Backend\lopController", "delchildren"]);
					$router->get('addtoclass/{id}', ["App\Controllers\Backend\lopController", "addtoclass"]);
					$router->get('addthucong/{ageClass}', ["App\Controllers\Backend\lopController", "addthucong"]);
					$router->POST('addcheckbox', ["App\Controllers\Backend\lopController", "Addcheckbox"]);
				});
				    $router->group(['prefix'=>'lien-he'],function($router){
					$router->get('',['App\Controllers\Backend\contactController','index']);
					$router->get('del/{id}',['App\Controllers\Backend\contactController','del']);
					$router->get('detail/{id}',['App\Controllers\Backend\contactController','Detail']);
					$router->POST('send',['App\Controllers\Backend\ContactController','send']);
					$router->POST('send-ok',['App\Controllers\Backend\ContactController','send_ok']);
				});
				$router->group(['prefix'=>'image'],function($router){
					$router->get('',['App\Controllers\Backend\imageController','index']);
					$router->get('del/{id}',['App\Controllers\Backend\imageController','del']);
					$router->get('beautifuls/del/{id}',['App\Controllers\Backend\imageController','beautifulsdel']);
					$router->get('beautifuls/add/{id}',['App\Controllers\Backend\imageController','beautifulsadd']);
					$router->get('edit/{id}',['App\Controllers\Backend\imageController','edit']);
					$router->POST('edit',['App\Controllers\Backend\imageController','post_edit']);
					$router->get('add',['App\Controllers\Backend\imageController','add']);
					$router->get('chi-tiet/{id}',['App\Controllers\Backend\imageController','chitiet']);
					$router->POST('saveadd',['App\Controllers\Backend\imageController','save_add']);
				});
				$router->group(['prefix'=>'comment'],function($router){
					$router->get('',['App\Controllers\Backend\commentController','index']);
					$router->get('detail/{id}',['App\Controllers\Backend\commentController','detail']);
					$router->get('del/{id}/{id_new}',['App\Controllers\Backend\commentController','del']);
				});


			});
		});
		// Parents
$router->group(['prefix'=>'phu-huynh'],function($router){
	$router->get('',['App\Controllers\Backend\Parents\HomeController','index']);
	$router->get('edit',['App\Controllers\Backend\Parents\HomeController','edit']);
	$router->get('tham-gia-hoat-dong',['App\Controllers\Backend\Parents\HomeController','joinactivate']);
	$router->post('tham-gia-hoat-dong/{id}',['App\Controllers\Backend\Parents\HomeController','postjoinactivate']);
	$router->post('edit',['App\Controllers\Backend\Parents\HomeController','postEdit']);

	$router->get('hoc-sinh',['App\Controllers\Backend\Parents\StudentController','listStudents']);
	$router->get('hoc-sinh/hoat-dong/{id}',['App\Controllers\Backend\Parents\StudentController','hoatdong']);
	$router->get('hoc-sinh/lich-hoc/{id}',['App\Controllers\Backend\Parents\StudentController','lichhoc']);
	$router->get('hoc-sinh/an-uong/{id}',['App\Controllers\Backend\Parents\StudentController','anuong']);
});
		// front end
$router->get('',['App\Controllers\Frontend\HomeController','index']);

$router->get('anh-dep/{id}',['App\Controllers\Frontend\HomeController','anhdep']);

$router->get('tuyensinh',['App\Controllers\Frontend\HomeController','tuyensinh']);


$router->POST('comment',['App\Controllers\Backend\commentController','add']);

$router->group(['prefix'=>'lien-he'],function($router){
	$router->get('',['App\Controllers\Frontend\ContactController','index']);
	$router->POST('post-lien-he',['App\Controllers\Frontend\ContactController','postlienhe']);
});



$router->get('chuong-trinh-hoc',['App\Controllers\Frontend\ContactController','learning']);
$router->get('tin-tuc',['App\Controllers\Frontend\NewsController','index']);
$router->get('tin-tuc/{slug}.html',['App\Controllers\Frontend\NewsController','detail']);




$dispatcher = new \Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
echo $response;
}
}
?>