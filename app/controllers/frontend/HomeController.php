<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\models\{NewsModel,imageModel};
/**
 * 
 */
class HomeController extends BaseController
{
	function index(){
		$data['news'] = NewsModel::all()->take(4);
		// $data['news'] = NewsModel::where('featured',1)->get();
		$data['anhdep'] = imageModel::limit(8)->get();
		// $data['anhdep1'] = imageModel::where('id',13)->first();
		// dd($data['anhdep1']->getPicture);
		// $data['anhdepfirst'] = imageModel::limit(8)->first();
		$this->render('frontend.index',$data);
	}
	function anhdep($id){
		$this->render('frontend.anhdep');
	}
}
	
?>