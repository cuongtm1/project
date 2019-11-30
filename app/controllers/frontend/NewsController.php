<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\models\{NewsModel};
/**
 * 
 */
class NewsController extends BaseController
{
	
	function index(){
		$data['news']= NewsModel::all();
		$this->render('frontend.news.news',$data);
	}
	function detail($slug){
		$data['newsDetail'] = NewsModel::where('slug',$slug)->first();
		$this->render('frontend.news.details',$data);
	}
}
	
?>