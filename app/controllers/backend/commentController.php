<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{commentModel,NewsModel,UserModel};
/**
 * 
 */
class commentController extends BaseController
{



    function index(){
      $data['id_new']=commentModel::select('id_news','id')->groupBy('id_news')->get();
    //   dd($data);
        $this->render('backend.comment.index',$data);
    }


    function detail($id){
        $data['show']=commentModel::where("id_news",$id)->get();
        $data['user']=UserModel::all();
          $this->render('backend.comment.detail',$data);
      }

      function del($id,$id_new){
        commentModel::destroy($id);
        $data['show']=commentModel::where("id_news",$id_new)->get();
        $data['user']=UserModel::all();
        ss("ok","xóa thành công");
        $this->render('backend.comment.detail',$data);
      }










    // bình luận từ bên ngoài
	function add(){
        $user=$_SESSION['user']['id'];
        $content=$_POST['content'];
        $date=date('Y/m/d');
        $id_new=$_POST['id_new'];
        $slug=$_POST['slug'];
        $comment= new commentModel();
        $comment->id_user=$user;
        $comment->created_at=$date;
        $comment->content=$content;
        $comment->id_news=$id_new;
        $comment->save();
        header("location:".BASE_URL."tin-tuc/$slug.html");
    }
    

    




}

?>