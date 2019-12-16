<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class commentModel extends Model{
	
	protected $table = 'comments';
	public $timestamps = false;
    public function getNews()
	{
		return $this->belongsTo('App\models\NewsModel', 'id_news', 'id');
	}
}
?>