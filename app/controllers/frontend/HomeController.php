<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
/**
 * 
 */
class HomeController extends BaseController
{
	
	function index(){
		$this->render('frontend.index');
	}
}
	
?>