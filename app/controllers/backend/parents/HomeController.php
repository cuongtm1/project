<?php
namespace App\Controllers\Backend\Parents;
use App\Controllers\BaseController;
use App\Models\{ParentModel,UserModel,ActivateModel,Join_activate};
/**
 * 
 */
class HomeController extends BaseController
{

	function index(){
		// dd($_SESSION['user']['phone']);
		$data['user'] = UserModel::where('phone',$_SESSION['user']['phone'])->first();
		$this->render('backend.phuhuynh.index',$data);
	}
	function edit(){
		$data['user'] = UserModel::where('phone',$_SESSION['user']['phone'])->first();
		$this->render('backend.phuhuynh.edit',$data);
	}
	function postEdit(){
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$father_name = $_POST['father_name'];
		$mother_name = $_POST['mother_name'];
		$father_phone = $_POST['father_phone'];
		$mother_phone = $_POST['mother_phone'];
		$father_job = $_POST['father_job'];
		$mother_job = $_POST['mother_job'];
		$address = $_POST['address'];

		$user = UserModel::where('phone',$_SESSION['user']['phone'])->first();
		$user->phone = $phone;
		if($password!="" && $password==$repassword){
			$user->password = password_hash($password, PASSWORD_DEFAULT);
		}
		$user->role=0;
		$user->save();
		$parent = $user->getParent;
		$parent->father_name = $father_name;
		$parent->mother_name = $mother_name;
		$parent->father_phonenumber = $father_phone;
		$parent->mother_phonenumber = $mother_phone;
		$parent->father_job = $father_job;
		$parent->mother_job = $mother_job;
		$parent->address = $address;
		$parent->email = $email;
		$parent->save();
		ss('editphuhuynh','Sửa thông tin thành công');
		header('location:'.BASE_URL.'phu-huynh/edit/');
	}

	function joinactivate(){
		$data['date']=date("Y-m-d");
		$data['activate'] = ActivateModel::all();
		$data['user'] = UserModel::where('phone',$_SESSION['user']['phone'])->first()->getParent()->first();
		// $user = $data['user']->getChildren()->first()->getJoinActivate;
		// dd($user);
		$this->render('backend.phuhuynh.joinactivate',$data);
	}




	function postjoinactivate($id){
		// check hs đã gửi yc tham gia chưa
		$Activate =Join_activate::all();
		$check = false;
		foreach ($Activate as $key => $value) {
			if($_POST['children'] == $value->children_id && $value->activate_id == $id){
				$check = true;
		}
		}
		if($check == true){
			ss('joinactive-False','Học sinh đã đăng ký tham gia hoạt động đang chờ xác nhận');
			header('location:'.BASE_URL.'phu-huynh/tham-gia-hoat-dong/');
		}else{
		$join_activate = new Join_activate();
		$join_activate->activate_id = $id;
		$join_activate->children_id = $_POST['children'];
		$join_activate->status = 0;
		$join_activate->save();
		ss('joinactive','Đăng ký tham gia hoạt động thành công, Vui lòng chờ xác nhận từ nhà trường');
		header('location:'.BASE_URL.'phu-huynh/tham-gia-hoat-dong/');
		}
		
	}







}

?>