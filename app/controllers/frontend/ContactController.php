<?php
namespace App\Controllers\Frontend;
use App\Controllers\BaseController;
use App\models\{SettingModel};
/**
 * 
 */
class ContactController extends BaseController
{
	
	function index(){
		$data['setting'] = SettingModel::find(1);
		$this->render('frontend.contact.contact',$data);
	}
}
	
?>