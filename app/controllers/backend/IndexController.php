<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
/**
 * 
 */
class IndexController extends BaseController
{

	function login(){
		$this->render('login');
	}
}

?>