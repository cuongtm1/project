<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{ActivateModel,Join_activate};
class ActivateController extends BaseController
{
	function index(){
		$data['activate'] = ActivateModel::all();
		$this->render('backend.activate.list',$data);
	}
	function add(){
		$this->render('backend.activate.add');
	}
	function postadd(){
		$name = $_POST['name'];
		$start = $_POST['start'];
		$stop = $_POST['stop'];
		$desc = $_POST['description'];

		$addActivate = new ActivateModel();
		$addActivate->activate = $name;
		$addActivate->start = $start;
		$addActivate->stop = $stop;
		$addActivate->description = $desc;
		$addActivate->save();
		ss('addactivate','Thêm hoạt động thành công');
		header('location:'.BASE_URL.'admin/activate');
	}
	function del($id){
		ActivateModel::destroy($id);
		ss('delactivate','Xóa thành công hoạt động');
		header('location:'.BASE_URL.'admin/activate');
	}
	function edit($id){
		$data['editActivate'] = ActivateModel::find($id);
		$this->render('backend.activate.edit',$data);
	}
	function postEdit($id){
		// dd($_REQUEST);
		$name = $_POST['name'];
		$start = $_POST['start'];
		$stop = $_POST['stop'];
		$desc = $_POST['description'];

		$editActivate = ActivateModel::find($id);
		$editActivate->activate = $name;
		$editActivate->start = $start;
		$editActivate->stop = $stop;
		$editActivate->description = $desc;
		$editActivate->save();
		ss('editactivate','Sửa hoạt động thành công');
		header('location:'.BASE_URL.'admin/activate/edit/'.$id);
	}
	function pending($id){
		$data['pending'] =  ActivateModel::find($id)->getJoinActivate()->where('status',0)->get();
		// dd($data);
		$this->render('backend.activate.pending',$data);
	}
	function confirm($id){
		$confirm = Join_activate::where('children_id',$id)->first();
		// dd($confirm);
		$confirm->status = 1;
		$confirm->save();
		ss('confirmActivate','Xác nhận thành công');
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}
	function delconfirm($id){
		$confirm = Join_activate::where('children_id',$id)->first();
		// dd($confirm);
		$confirm->status = 0;
		$confirm->save();
		ss('delconfirmActivate','Hủy tham gia thành công');
		header('Location:' . $_SERVER['HTTP_REFERER']);
	}
	function join($id){
		$data['activate'] = ActivateModel::find($id)->getJoinActivate()->where('status',1)->get();
		$this->render('backend.activate.join',$data);
	}


	function del123($id){
		echo $id;
		Join_activate::destroy($id);
		header('Location:' .BASE_URL."admin/activate");
	}




}
?>
