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
        $data['class']=lop::find($id);
        $data['childrens']=childenModel::where('class_id',$id)->get();
		$this->render('backend.class.listchilden',$data);
    }

    function delchildren($id,$id_class){
        $children=childenModel::find($id);
        $children->class_id=null;
        $children->save();
		header('location:'.BASE_URL."admin/class/detail/$id_class");
    }

    


    function addtoclass($id){
        // lấy thông tin của lớp hoc
        $class=lop::find($id);
        // tìm xem có bn hs trong lớp rồi
        $children=childenModel::where("class_id",$id)->get();
        // tìm toàn bộ hs chưa có lớp
        $childrennull=childenModel::where("class_id",null)->get();
        for ($i=count($children); $i < 30; $i++) { 
        // tìm xem có bn hs chưa có lớp và add vào lớp tương ứng vs tuổi
        foreach ($childrennull as $key => $value) {
            $tuoi = date_format(date_create($value->birthday),"m/d/Y");
            // tinhs tuooir
            $birthDate = $tuoi;
            //explode the date to get month, day and year
            $birthDate = explode("/", $birthDate);
            //get age from date or birthdate
            $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                ? ((date("Y") - $birthDate[2]) - 1)
                : (date("Y") - $birthDate[2]));

            if($age==$class->age){
            $value->class_id=$class->id;
            $value->save();
            }
        }
        }
		header('location:'.BASE_URL."admin/class/detail/$class->id");
    }

    
    
    










}

?>
