<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{SettingModel};
/**
 * 
 */
class HomeController extends BaseController
{

	function index(){
		$this->render('backend.index');
	}
	function setting(){
		$data['setting'] = SettingModel::find(1);
		// dd($data);
		$this->render('backend.setting',$data);
	}
	function postSetting(){
		// dd($_REQUEST);
		$setting = SettingModel::find(1);
		if($_FILES['image']['size']>0){
			$image = $_FILES['image'];
			move_uploaded_file($image['tmp_name'], 'public/image/'.$image['name']);
			$setting->logo = $image['name'];
		}
		$setting->phone = isset($_POST['phonenumber'])?$_POST['phonenumber']:'';
		$setting->email = isset($_POST['email'])?$_POST['email']:'';
		$setting->facebook = isset($_POST['facebook'])?$_POST['facebook']:'';
		$setting->google = isset($_POST['google'])?$_POST['google']:'';
		$setting->message_footer = isset($_POST['message_footer'])?$_POST['message_footer']:'';
		$setting->zalo = isset($_POST['zalo'])?$_POST['zalo']:'';
		$setting->map = isset($_POST['googlemap'])?$_POST['googlemap']:'';
		$setting->address = isset($_POST['address'])?$_POST['address']:'';
		$setting->save();
		ss('editSetting','Sửa thành công');
		header('location:'.BASE_URL.'admin/setting');
	}
}

?>