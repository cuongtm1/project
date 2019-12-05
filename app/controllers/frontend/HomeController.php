<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\models\{NewsModel};
/**
 * 
 */
class HomeController extends BaseController
{
	
	function index(){
		$data['news'] = NewsModel::all()->take(4);
		$this->render('frontend.index',$data);
	}
}
	
?>