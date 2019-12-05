<?php
namespace App\Controllers\Backend\Parents;
use App\Controllers\BaseController;
use App\Models\{ParentModel,UserModel};
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
}

?>