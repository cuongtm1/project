<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class NewsModel extends Model{

	protected $table = 'news';
	public function getCate()
	{
	    return $this->belongsTo('App\models\categoryModel', 'cate_id', 'id');
	}
}
?>