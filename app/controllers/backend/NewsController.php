<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\{NewsModel,CategoryModel};
/**
 * 
 */
class NewsController extends BaseController
{

	function index(){
		$data['news'] = NewsModel::all();
		$this->render('backend.news.news',$data);
	}
	function delNews($id){
		NewsModel::destroy($id);
		ss('delNews','Xóa tin tức thành công');
		header('location:'.BASE_URL.'admin/tin-tuc/danh-sach');
	}
	function addNews(){
		$data['cate'] = CategoryModel::all();
		$this->render('backend.news.add',$data);
	}
	function addNewsPost(){
		// var_dump($_FILES['image']);die;
		// dd($_REQUEST);
		$image ="noimage.jpg";
		$featured = 0;
		$title = $_POST['title'];
		$description = $_POST['description'];
		$content = $_POST['editor1'];
		$slug = $_POST['slug'];
		if(isset($_POST['featured'])){
			$featured = 1;
			// $image_slide = $_POST['image_slide'];
		}
		if($_FILES['image']['size']>0){
			$image = uniqid().'-'.$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],'public/image/'.$image);
		}
		$cate = $_POST['cate'];
		$news = new NewsModel();
		$news->title = $title;
		$news->description = $description;
		$news->slug = slug($title);
		$news->content = $content;
		$news->featured = $featured;
		$news->cate_id = $cate;
		$news->image = $image;
		$news->save();
		ss('addnews','Thêm tin tức mới thành công');
		header('location:'.BASE_URL.'admin/tin-tuc/danh-sach');
	}
}

?>