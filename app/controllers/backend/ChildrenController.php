<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\childenModel;
use App\models\lop;
/**
 * 
 */
class ChildrenController extends BaseController
{

	function index(){
		$data["childens"]=childenModel::all();
		$this->render('backend.childen.listchilden',$data);
	}

	function del($id){
		childenModel::Destroy($id);
		$data["childens"]=childenModel::all();
		$this->render('backend.childen.listchilden',$data);
	}

	// function FormAdd(){
	// 	$data["class"]=lop::all();
	// 	$this->render('backend.childen.FormAddChilden',$data);
	// }

	// function saveadd(){
	// 	$save=new childenModel();
	// 	$save->fullname=$_POST['name'];
	// 	$save->class_id=$_POST['lop'];
	// 	$save->birthday=$_POST['ngaysinh'];
	// 	$save->permanent_residence=$_POST['diachi'];
	// 	$save->place_of_birth=$_POST['noisinh'];
	// 	$save->gender=$_POST['gioitinh'];

	// 	$save->parent_id=1;
	// 	$save->save();
	// 	// show lại danh sách
	// 	$data["childens"]=childenModel::all();
	// 	$this->render('backend.childen.listchilden',$data);
	// }
	


	function FormEdit($id){
		$data["childen"]=childenModel::where('id',$id)->first();
		$data["class"]=lop::all();
		$this->render('backend.childen.FormeditChilden',$data);
	}


	function saveedit($id){
		$save=childenModel::find($id);
		$save->fullname=$_POST['name'];
		$save->class_id=$_POST['lop'];
		$save->birthday=$_POST['ngaysinh'];
		$save->permanent_residence=$_POST['diachi'];
		$save->place_of_birth=$_POST['noisinh'];
		$save->gender=$_POST['gioitinh'];
		$save->save();
		// show lại childen vừa sửa và thông báo thành công
		$data["childen"]=childenModel::where('id',$id)->first();
		$data["class"]=lop::all();
		ss("edit","Sửa thành công");
		$this->render('backend.childen.FormeditChilden',$data);
	}


	














}

?>
