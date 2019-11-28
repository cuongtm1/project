<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
/**
 * 
 */
class NewsController extends BaseController
{
	
	function index(){
		$this->render('frontend.news.news');
	}
}
	
?>