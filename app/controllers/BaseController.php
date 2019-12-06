<?php 
namespace App\Controllers;
/**
 * 
 */
use Jenssegers\Blade\Blade;
use App\models\{SettingModel};
class BaseController
{
	
	public function render($view, $data = []){
		$blade = new Blade('views', 'storage');
		echo $blade->make($view, $data);
	}
}
 ?>