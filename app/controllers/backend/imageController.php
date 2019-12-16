<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{imageModel,PictureModel};
/**
 * 
 */
class imageController extends BaseController
{

	function index(){
		$data["show"]=imageModel::all();
		// dd($data["show"]->getPicture);
		$this->render('backend.image.listimage',$data);
	}

	
	function del($id){
		imageModel::destroy($id);
		ss('delImage','Xóa thành công');
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
		$title = isset($_POST['title'])?$_POST['title']:'';
		$imageModel = new imageModel();
		$imageModel->title = $title;
		$imageModel->save();
		foreach ($_FILES["image"]["tmp_name"] as $key=>$tmp_name) {

			$file_name=uniqid().'-'.$_FILES["image"]["name"][$key];
			$file_tmp=$_FILES["image"]["tmp_name"][$key];
			move_uploaded_file($file_tmp, 'public/beautifuls/'.$file_name);

			$PictureModel = new PictureModel();
			$PictureModel->image = $file_name;
			$PictureModel->beautiful_picture_id = $imageModel->id;
			$PictureModel->save();
		}
		ss('addAlbum','Thêm album ảnh thành công');
		header('location:'.BASE_URL.'admin/image');
	}
	function chitiet($id){
		$data['image']= imageModel::find($id)->getPicture;
		$data['id'] = $id;
		// dd($data['image']);
		$this->render('backend.image.chitiet',$data);
	}
	function beautifulsdel($id){
		PictureModel::destroy($id);
		ss('xoapicture','Xóa ảnh thành công');
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	function beautifulsadd($id){
	}
}

?>