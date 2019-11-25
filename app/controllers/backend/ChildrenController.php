<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
/**
 * 
 */
class ChildrenController extends BaseController
{

	function index(){
		$this->render('backend.index');
	}
}

?>