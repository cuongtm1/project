<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{commentModel};
/**
 * 
 */
class commentController extends BaseController
{

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
		// $this->render('backend.index');
	}
    











}

?>