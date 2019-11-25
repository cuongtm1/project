<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
/**
 * 
 */
class ParentController extends BaseController
{

	function show(){
		$this->render('backend.parents.show');
	}
}

?>