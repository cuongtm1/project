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
		$data['vechungtoi'] = NewsModel::where("cate_id",3)->get()->take(3);
		$data['muctieugiaoduc'] = NewsModel::where("cate_id",4)->get()->take(3);

		// var_dump($data['vechungtoi']);die;

		$this->render('frontend.index',$data);
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
