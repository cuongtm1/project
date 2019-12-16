<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{userModel,ParentModel,PasswordReset};

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/**
 * 
 */
class loginController extends BaseController
{

	function login(){
		$this->render('login');
    }
    function loguot(){
        unset($_SESSION['user']);
        header("location:".BASE_URL."login");
    }
    

    function postlogin(){
        $sdt= isset($_POST['phone']) == true ? $_POST['phone'] :"";
        $pass= isset($_POST['pass']) == true ? $_POST['pass'] :"";

        $user= userModel::where('phone',$sdt)->first();
        $password=password_verify($pass, $user->password);

        if($user == null || $password == false){
            header("location:".BASE_URL."login");
        }else{
            $_SESSION['user']=[
                'role'=>$user->role,
                'phone'=>$user->phone,
            ];
            header("location:".BASE_URL."admin");
        }
    }
    function forgot(){
        $email = isset($_POST['email'])?$_POST['email']:'';
        $checkEmail = ParentModel::where('email',$email)->first();
        if($checkEmail==null){
            echo json_encode(['msg'=>0]);
        }
        if($checkEmail!=null){
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $phone = $checkEmail->getUser->phone;
            $token = uniqid().uniqid();
            $forgotpassword = new PasswordReset();
            $forgotpassword->token = $token;
            $forgotpassword->phone = $checkEmail->getUser->phone;
            $forgotpassword->save();
            $mail = new PHPMailer(true);
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
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
            $mail->Subject = 'Tìm lại mật khẩu - Trường mầm non Ánh Mai Sáng';
            $mail->Body    = "
            Xin chào $phone
            <br><br>
            Để tìm lại mật khẩu cho tài khoản $phone($email), hãy nhấp vào liên kết bên dưới:
            <br><br>
            http://localhost/project1/forgotpassword/$token
            <br>
            Liên kết sẽ hết hiệu lực sau 24h
            ";
            $mail->send();
            echo json_encode(['msg'=>1]);
        }
    }
    function getforgotPassword($token){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $check = PasswordReset::where('token',$token)->first();
        $time = strtotime($check->created_at);
        $now = time();
        if($now-$time>86400){
            echo 'Thời gian đặt lại mật khẩu đã hết.';die;
        }elseif($check->checked==1){
            echo 'Liên kết đã được sử dụng.';die;
        }else{
            $data['token'] = $token;
            $this->render('backend.forgot', $data);
        }
    }
    function confirmpassword(){
        // echo $_POST['repassword'];
        if($_POST['password']==$_POST['repassword']){
            $email = PasswordReset::where('token',$_POST['token'])->first();
            $user = userModel::where('phone',$email->phone)->first();
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user->save();
            $email->checked = 1;
            $email->save();
            echo json_encode(['msg'=>1]);
        }
        if($_POST['password']!=$_POST['repassword']){
            echo json_encode(['msg'=>0]);
        }
    }
}

?>