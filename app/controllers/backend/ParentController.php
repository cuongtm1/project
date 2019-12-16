<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\Models\{ParentModel,UserModel};

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/**
 * 
 */
class ParentController extends BaseController
{

	function show(){
		$data['parents'] = ParentModel::all();
		$this->render('backend.parents.show',$data);
	}
	function add(){
		$this->render('backend.parents.add');
	}
	function addPost(){
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$father_name = $_POST['father_name'];
		$mother_name = $_POST['mother_name'];
		$father_phone = $_POST['father_phone'];
		$mother_phone = $_POST['mother_phone'];
		$father_job = $_POST['father_job'];
		$mother_job = $_POST['mother_job'];
		$address = $_POST['address'];

		$user = new UserModel();
		$user->phone = $phone;
		$user->password = password_hash($password, PASSWORD_DEFAULT);
		$user->role = 0;
		$user->save();

		$parent = new ParentModel();
		$parent->father_name = $father_name;
		$parent->mother_name = $mother_name;
		$parent->father_phonenumber = $father_phone;
		$parent->mother_phonenumber = $mother_phone;
		$parent->father_job = $father_job;
		$parent->mother_job = $mother_job;
		$parent->email = $email;
		$parent->address = $address;
		$parent->id_users = $user->id;
		$parent->save();
		ss('addparent','Thêm thành công phụ huynh');
		header('location:'.BASE_URL.'admin/phu-huynh/thong-tin');

		//send emai khi them thanh cong tai khoan

		$mail = new PHPMailer(true);
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP(); 
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPAuth   = true;
		$mail->Username = 'cuongtmph06947@gmail.com';
		$mail->Password = '12manhcuong';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);                                   
		$mail->setFrom('cuongtmph06947@gmail.com', 'Ánh Mai Sáng');
		$mail->addAddress($email);
		$mail->isHTML(true);
		$mail->Subject = 'Thông tin tài khoản - Trường mầm non Ánh Mai Sáng';
		$mail->Body    = "
		Xin chào $phone
		<br><br>
		Đây là một email tự động của trường mầm non ánh mai sáng. Chúng tôi gửi bạn thông tin tài khoản để bạn có thể theo dõi và đăng ký các hoạt động trực tuyến cho các con đang theo học tại trường mầm non Ánh Mai Sáng
		<br><br>
		user : $phone<br>
		pass : $password
		<br>
		Liên kết để thực hiện đăng nhập : http://localhost/project1/login
		";
		$mail->send();
	}
	function edit($id){
		$data['user'] = UserModel::find($id);
		// dd($data['user']->getParent);
		$this->render('backend.parents.edit',$data);
	}
	function editPost($id){
		// dd($_REQUEST);
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

		$user = UserModel::find($id);
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
		ss('editparent','Sửa thông tin phụ huynh thành công');
		header('location:'.BASE_URL.'admin/phu-huynh/edit/'.$id);
	}
	function del($id){
		UserModel::destroy($id);
		ss('delparent','Xóa phụ huynh thành công');
		header('location:'.BASE_URL.'admin/phu-huynh/thong-tin');
	}
	function details($id){
		$user = UserModel::find($id);
		$data['parent'] = $user->getParent;
		$this->render('backend.parents.detail',$data);
	}
}

?>