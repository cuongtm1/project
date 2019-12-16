<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\models\{NewsModel,commentModel,UserModel};
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
		$data['comment'] =commentModel::where('id_news',$data['newsDetail']->id)->get();
		// $data['user'] =UserModel::where('id',$data['comment']->id)->get();
		$this->render('frontend.news.details',$data);
	}
}
	
?>