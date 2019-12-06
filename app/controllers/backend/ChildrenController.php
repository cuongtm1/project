<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{childenModel,lop,ParentModel};
/**
 * 
 */
class ChildrenController extends BaseController
{

	function index(){
		$data["childens"]=childenModel::all();
		$this->render('backend.childen.listchilden',$data);
	}
	function details(){
		
	}

	function del($id){
		childenModel::Destroy($id);
		$data["childens"]=childenModel::all();
		$this->render('backend.childen.listchilden',$data);
	}

	function FormAdd($id){
		$data['parent'] = ParentModel::find($id);
		$data["class"]=lop::all();
		$this->render('backend.childen.FormAddChilden',$data);
	}

	function saveadd($id){
		$save=new childenModel();
		$save->fullname=$_POST['name'];
		$save->class_id=$_POST['lop'];
		$save->birthday=$_POST['ngaysinh'];
		$save->permanent_residence=$_POST['diachi'];
		$save->place_of_birth=$_POST['noisinh'];
		$save->gender=$_POST['gioitinh'];
		$save->parent_id=$id;
		$save->save();
		ss('addchildren','Thêm học sinh thành công');
		header('location:'.BASE_URL.'admin/Childrens');
	}

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
	
	function Detail($id){
		$data["childen"]=ParentModel::find($id);
		$this->render('backend.childen.detailparent',$data);
		
	}
}

?>
