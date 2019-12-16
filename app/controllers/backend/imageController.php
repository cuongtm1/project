<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{imageModel};
/**
 * 
 */
class imageController extends BaseController
{

	function index(){
       $data["show"]=imageModel::all();
		$this->render('backend.image.listimage',$data);
	}

	
	function del($id){
		imageModel::destroy($id);
		header('location:'.BASE_URL.'admin/image');
	 }

	 function edit($id){
		$data['image']=imageModel::find($id);
		$this->render('backend.image.edit',$data);
	 }

	 function post_edit(){
		$image=imageModel::find($_POST['id']);

		if($_FILES['image']['size']>0){
			$img = uniqid().'-'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],'public/image/'.$img);
		}else{
			$img=$image->image;
		}
		$image->image=$img;
		$image->save();
		ss("ok","Sửa Thành Công");
		$data['image']=$image;
		$this->render('backend.image.edit',$data);
	 }


	 function add(){
		$this->render('backend.image.add');
	 }

	 function save_add(){
		if($_FILES['image']['size']<=0){
			ss("ok","bạn vui lòng chọn ảnh");
			$this->render('backend.image.add');
		}else{
		$img = uniqid().'-'.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],'public/image/'.$img);

		$image= new imageModel();
		$image->image=$img;
		$image->save();
		ss("ok","Thêm Thành Công");
		$this->render('backend.image.add');
		}
	 }
    

}

?>