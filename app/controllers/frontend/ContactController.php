<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\models\{SettingModel,ContactModel};
/**
 * 
 */
class ContactController extends BaseController
{
	
	function index(){
		$data['setting'] = SettingModel::find(1);
		$this->render('frontend.contact.contact',$data);
	}
	function learning(){
		$this->render('frontend.chuongtrinhhoc');
	}


	function postlienhe(){
		// var_dump($_POST["name"],$_POST["Email"],$_POST["phone"],$_POST["title"],$_POST["content"]);die;
		$contact= New ContactModel();
		$contact->title =$_POST["title"];
		$contact->content =$_POST["content"];
		$contact->checked =0;
		$contact->created_at =date("Y-m-d");
		$contact->fullname =$_POST["name"];
		$contact->email =$_POST["Email"];
		$contact->phone =$_POST["phone"];
		$contact->save();
		
		header('location:'.BASE_URL."lien-he");
	}














}
	
?>