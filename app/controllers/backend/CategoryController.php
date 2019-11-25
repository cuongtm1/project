<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\categoryModel;
/**
 * 
 */
class CategoryController extends BaseController
{

	function index(){
        $data["category"]=categoryModel::all();
		$this->render('backend.categories.listcate',$data);
	}

	function del($id){
		categoryModel::Destroy($id);
		$data["category"]=categoryModel::all();
		$this->render('backend.categories.listcate',$data);
	}

    function FormAdd(){
		$this->render('backend.categories.FormAddCate');
    }
    function FormSaveAdd(){
        $save=new categoryModel();
        $save->name=$_POST['name'];
        $save->save();
        ss("add","Thêm thành công danh mục");
        $this->render('backend.categories.FormAddCate');
    }
    
    function Formedit($id){
        $data["cate"]=categoryModel::find($id);
        if($data["cate"]->name == ""){
            header('location:'.BASE_URL."admin/category/");die;
        }else{
        $this->render('backend.categories.FormEditCate',$data);
        }
    }


    function SaveEdit($id){
        $save=categoryModel::find($id);
        $save->name=$_POST['name'];
        $save->save();
        ss("edit","Bạn đã sửa thành công danh mục");
        $data["cate"]=categoryModel::find($id);
        $this->render('backend.categories.FormEditCate',$data);
       
    }
    



    








}

?>
