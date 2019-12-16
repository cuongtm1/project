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
		$data['vechungtoi'] = NewsModel::where("cate_id",3)->get()->take(3);
		$data['muctieugiaoduc'] = NewsModel::where("cate_id",4)->get()->take(3);

		// var_dump($data['vechungtoi']);die;

		$this->render('frontend.index',$data);
	}
	function anhdep($id){
		$this->render('frontend.anhdep');
	}

	function tuyensinh(){
		// $data['news'] = NewsModel::all()->take(4);
		// $data['vechungtoi'] = NewsModel::where("cate_id",3)->get()->take(3);
		// $data['muctieugiaoduc'] = NewsModel::where("cate_id",4)->get()->take(3);

		// // var_dump($data['vechungtoi']);die;

		$this->render('frontend.tuyensinh');
	}

}
	
?>
