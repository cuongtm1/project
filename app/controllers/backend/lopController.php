<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{childenModel,lop,ParentModel};
/**
 * 
 */
class lopController extends BaseController
{

	function index(){
        $data["class"]=lop::all();
		$this->render('backend.class.listclass',$data);
    }


    function Formedit($id){
        $data["class"]=lop::where('id',$id)->first();
		$this->render('backend.class.FormEditclass',$data);
	}
    
    function SaveEdit($id){
        $save=lop::find($id);
        $save->name=$_POST['name'];
        $save->save();
        ss("edit","bạn đã sửa thành công");
        $data['class']=lop::find($id);
		$this->render('backend.class.FormEditclass',$data);
    }

    function FormAdd(){
		$this->render('backend.class.FormAddclass');
    }

    function FormSaveAdd(){
        $save= new lop();
        $save->name=$_POST['name'];
        $save->age=$_POST['age'];
        $save->save();
        ss("add","Thêm thành công");
		$this->render('backend.class.FormAddclass');
    }


    function del($id){
        lop::destroy($id);
		header('location:'.BASE_URL."admin/class/");
    }

    function detail($id){
        $data['childrens']=childenModel::where('class_id',$id)->get();
		$this->render('backend.class.listchilden',$data);
    }
    
    










}

?>
