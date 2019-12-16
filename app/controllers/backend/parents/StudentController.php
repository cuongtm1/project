<?php
namespace App\Controllers\Backend\Parents;
use App\Controllers\BaseController;
use App\Models\{childenModel,ParentModel,UserModel,ActivateModel,Join_activate};
/**
 * 
 */
class StudentController extends BaseController
{
	function listStudents(){
		$data['user'] = UserModel::where('phone',$_SESSION['user']['phone'])->first();
		$this->render('backend.phuhuynh.students.student',$data);
	}
	function hoatdong($id){
		$data['hoatdong'] = childenModel::find($id)->getJoinActivate()->get();
		// dd($data);
		$this->render('backend.phuhuynh.students.hoatdong',$data);
	}
}