<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{ContactModel};

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/**
 * 
 */
class contactController extends BaseController
{

    function index(){
        $data["list"]=ContactModel::all();
        $this->render('backend.Contact.listContact',$data);
}


function del($id){
    ContactModel::destroy($id);
	header('location:'.BASE_URL."admin/lien-he/");
}


function Detail($id){
    $data["contact"]=ContactModel::find($id);
	$this->render('backend.Contact.detail',$data);
}


function send(){
    $id=$_POST['id'];
    $data['email'] =ContactModel::find($id);
	$this->render('backend.Contact.send',$data);
}

function send_ok(){
        $id=$_POST['id'];
        $email =ContactModel::find($id);
	    $email = $email->email;
        $tieu_de = isset($_POST['title']) == true ? $_POST['title'] :"";
        $noi_dung = isset($_POST['content']) == true ? $_POST['content'] :"";
        $mail = new PHPMailer(true);
    try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP(); 
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username = 'trantienphuchgvt@gmail.com';
    $mail->Password = 'trantienphuc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;   
    $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );                                  
    $mail->setFrom('phucttph07004@gmail.com', 'Ánh Mai Sáng');
    $emails = explode(",",$email);
    foreach ($emails as $e) {
        $mail->addAddress($e);
    }
    $mail->isHTML(true);
    $mail->Subject = $tieu_de;  // biến tiêu đề lấy từ form
    $mail->Body    = $noi_dung;   // biến nội dung lấy từ form
    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


    // lưu lại là đã xử lý
    $save =ContactModel::find($id);
    $save->checked=1;
    $save->save();

    
    header('location:'.BASE_URL."admin/lien-he/");

}






















}











